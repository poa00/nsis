!ifndef __WIN_PROPKEY__INC
!define __WIN_PROPKEY__INC
!verbose push
!verbose 3 


/**************************************************
WTypes.h
**************************************************/
;NOTE: This list is incomplete
!define VT_EMPTY     0
!define VT_NULL      1
!define VT_I2        2
!define VT_I4        3
!define VT_BSTR      8
!define VT_BOOL      11
!define VT_I1        16
!define VT_UI1       17
!define VT_UI2       18
!define VT_UI4       19
!define VT_I8        20
!define VT_UI8       21
!define VT_INT       22
!define VT_UINT      23
!define VT_HRESULT   25
!define VT_PTR       26
!define VT_SAFEARRAY 27
!define VT_LPSTR     30
!define VT_LPWSTR    31
!define VT_FILETIME  64

!define /ifndef VARIANT_TRUE -1
!define /ifndef VARIANT_FALSE 0

!define SYSSIZEOF_PROPERTYKEY 20
!define SYSSTRUCT_PROPERTYKEY (&g16,&i4) ;System.dll is buggy when it comes to g and forces us to specify the size

!define STGC_DEFAULT 0
!define STGC_OVERWRITE 1
!define STGC_ONLYIFCURRENT 2
!define STGC_DANGEROUSLYCOMMITMERELYTODISKCACHE 4
!define STGC_CONSOLIDATE 8


/**************************************************
PropIdl.h
**************************************************/
!define SYSSIZEOF_PROPVARIANT 16
!define SYSSTRUCT_PROPVARIANT (&i2,&i6,&i8)

!define PRSPEC_LPWSTR 0
!define PRSPEC_PROPID 1
!define SYSSTRUCT_PROPSPEC (p,p)


/**************************************************
Propkey.h
**************************************************/
!define PKEY_AppUserModel_ID                          '"{9F4C2855-9F79-4B39-A8D0-E1D42DE1D5F3}",5'
!define PKEY_AppUserModel_ExcludeFromShowInNewInstall '"{9F4C2855-9F79-4B39-A8D0-E1D42DE1D5F3}",8' ; VT_BOOL
!define PKEY_AppUserModel_PreventPinning              '"{9F4C2855-9F79-4B39-A8D0-E1D42DE1D5F3}",9' ; VT_BOOL
!define APPUSERMODEL_STARTPINOPTION_NOPINONINSTALL 1
!define APPUSERMODEL_STARTPINOPTION_USERPINNED 2
!define PKEY_AppUserModel_StartPinOption '"{9F4C2855-9F79-4B39-A8D0-E1D42DE1D5F3}",12' ; VT_UI4 [Eight+]


/**************************************************
ShlGuid.h & ShlObj.h
**************************************************/
!define FMTID_Intshcut {000214A0-0000-0000-C000-000000000046}
!define PID_IS_URL 2 ; VT_LPWSTR
!define PID_IS_HOTKEY 6 ; VT_UI2
!define PID_IS_ICONINDEX 8 ; VT_I4
!define PID_IS_ICONFILE 9 ; VT_LPWSTR
!define PKEY_Intshcut_Url '"${FMTID_Intshcut}",${PID_IS_URL}' ; Undocumented
!define FMTID_InternetSite {000214A1-0000-0000-C000-000000000046}
!define PID_INTSITE_LASTVISIT 4 ; VT_FILETIME
!define PID_INTSITE_VISITCOUNT 6 ; VT_UI4


/**************************************************
Helper macros
**************************************************/
!define V_GetVT '!insertmacro V_GetVT '
!macro V_GetVT pPV sysdst
System::Call '*${pPV}(&i2.${sysdst})'
!macroend
!define V_SetVT '!insertmacro V_SetVT '
!macro V_SetVT pPV syssrc
System::Call '*${pPV}(&i2 ${syssrc})'
!macroend
!macro V_GetHelper sysvaltyp pPV sysdst
System::Call '*${pPV}(l,${sysvaltyp}.${sysdst})'
!macroend
!macro V_GenericSetHelper sysvaltyp pPV VT syssrc
!if "${VT}" != "" ; Setting the VT is optional
  System::Call '*${pPV}(&i2 ${VT},&i6,${sysvaltyp}${syssrc})'
!else
  System::Call '*${pPV}(l,${sysvaltyp}${syssrc})'
!endif
!macroend
!macro V_SpecificSetHelper VT sysvaltyp pPV syssrc
System::Call '*${pPV}(&i2 ${VT},&i6,${sysvaltyp}${syssrc})'
!macroend
!macro Make_V_GetterSetter name sysvaltyp setsep
!define V_Get${name} '!insertmacro V_GetHelper "${sysvaltyp}" '
!ifdef VT_${name}
  !define V_Set${name} '!insertmacro V_SpecificSetHelper ${VT_${name}} "${sysvaltyp}${setsep}" '
!else
  !define V_Set${name} '!insertmacro V_GenericSetHelper "${sysvaltyp}${setsep}" '
!endif
!macroend
!insertmacro Make_V_GetterSetter Int8 "&i1" " "  ; Generic
!insertmacro Make_V_GetterSetter Int16 "&i2" " " ; Generic
!insertmacro Make_V_GetterSetter Int32 "i" ""    ; Generic
!insertmacro Make_V_GetterSetter Int64 "l" ""    ; Generic
!insertmacro Make_V_GetterSetter Pointer "p" ""  ; Generic
!insertmacro Make_V_GetterSetter I4 "i" " "
!insertmacro Make_V_GetterSetter BOOL "&i2" " "
!insertmacro Make_V_GetterSetter FILETIME "l" ""

!macro VariantInit pV
${V_SetVT} ${pV} ${VT_EMPTY}
!macroend
!macro VariantClear pV
System::Call 'OLEAUT32::#9(p${pV})'
!macroend
!macro VariantCopy pDstV pSrcV sysretHR
System::Call 'OLEAUT32::#10(p${pDstV},p${pSrcV})i.${sysretHR}'
!macroend
!macro VariantChangeType pDstV pSrcV Flags VT sysretHR
System::Call 'OLEAUT32::#12(p${pDstV},p${pSrcV},i${Flags},i${VT})i.${sysretHR}'
!macroend
!macro PropVariantClear pPV
System::Call 'OLE32::PropVariantClear(p${pV})' ; Win95+, WinNT4.SP2+
!macroend

!macro IPropertyStorage_ReadPropById pPS ID pPV sysoutHR
System::Call '*(p${PRSPEC_PROPID},p${ID})p.s'
${IPropertyStorage::ReadMultiple} ${pPS} '(1,pss,p${pPV})${sysoutHR}'
System::Free
!macroend

!macro IPropertyStorage_WritePropById pPS ID pPV sysoutHR
System::Call '*(p${PRSPEC_PROPID},p${ID})p.s'
${IPropertyStorage::WriteMultiple} ${pPS} '(1,pss,p${pPV},2)${sysoutHR}'
System::Free
!macroend


!verbose pop
!endif /* __WIN_PROPKEY__INC */
