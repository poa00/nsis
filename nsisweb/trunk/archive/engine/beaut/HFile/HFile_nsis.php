<?php
global $BEAUT_PATH;
if (!isset ($BEAUT_PATH)) return;

require_once($BEAUT_PATH.'/Beautifier/HFile.php');

class HFile_nsis extends HFile{

 function HFile_nsis() {
    $this->HFile();	

		/*************************************/
		// Beautifier Highlighting Configuration File 
		// NSIS
		/*************************************/
		// Flags

		$this->nocase            	= "0";
		$this->notrim            	= "1";
		$this->perl              	= "0";

		// Colours

		$this->colours        		= array("purple","yellow","green","red","yellow","blue","orange","brown");
		$this->quotecolour       	= "red";
		$this->blockcommentcolour	= "green";
		$this->linecommentcolour 	= "green";
		$this->prepro			        = "!";
		$this->preprocolour		    = "yellow";

		// Indent Strings

		$this->indent            	= array();//"Function", "Section");
		$this->unindent          	= array();//"FunctionEnd", "SectionEnd");

		$this->selecton		        = "<!";
		$this->selectoff	       	= "!>0";

		// String characters and delimiters

		$this->stringchars       	= array('"', "'","`");
		$this->delimiters        	= array("/", "!", "@", "%", "^", "&", "*", "(", ")", "+", "=", "|", "\\", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", ".", "?");
		$this->escchar           	= "";

		// Comment settings

		$this->linecommenton     	= array(";", "#");
		$this->blockcommenton    	= array("");
		$this->blockcommentoff   	= array("");

		// Keywords (keyword mapping to colour number)
		// Colour groups I have chosen roughly correspond to :-
		//   1 - Functions
		//   2 - Variables
		//   3 - Page related
		//   4 - Installer Attributes
		//   5 - Instructions
		//   6 - Parameter Keywords
		//   7 - Preprocessor Commands
		//   8 - MUI Commands

		$this->keywords = array(
		  "Function" => "1",
		  "FunctionEnd" => "1",
			".onGUIInit" => "1",
			".onInit" => "1",
			".onInstFailed" => "1",
			".onInstSuccess" => "1",
			".onMouseOverSection" => "1",
			".onSelChange" => "1",
			".onUserAbort" => "1",
			".onVerifyInstDir" => "1",
			"un.onGUIInit" => "1",
			"un.onInit" => "1",
			"un.onUninstFailed" => "1",
			"un.onUninstSuccess" => "1",
			"un.onUserAbort" => "1",
			"\$INSTDIR" => "2",
			"\$OUTDIR" => "2",
			"\$0" => "2", 
			"\$1" => "2", 
			"\$2" => "2", 
			"\$3" => "2", 
			"\$4" => "2", 
			"\$5" => "2", 
			"\$6" => "2", 
			"\$7" => "2", 
			"\$8" => "2", 
			"\$9" => "2", 
			"\$R0" => "2", 
			"\$R1" => "2", 
			"\$R2" => "2", 
			"\$R3" => "2", 
			"\$R4" => "2", 
			"\$R5" => "2", 
			"\$R6" => "2", 
			"\$R7" => "2", 
			"\$R8" => "2", 
			"\$R9" => "2",
			"\$CMDLINE" => "2",
			"\$LANGUAGE" => "2",
			"\$PROGRAMFILES" => "2",
			"\$DESKTOP" => "2",
			"\$EXEDIR" => "2",
			"\${NSISDIR}" => "2",
			"\$WINDIR" => "2",
			"\$SYSDIR" => "2",
			"\$TEMP" => "2",
			"\$STARTMENU" => "2",
			"\$SMPROGRAMS" => "2",
			"\$SMSTARTUP" => "2",
			"\$QUICKLAUNCH" => "2",
			"\$HWNDPARENT" => "2",
			"\$PLUGINSDIR" => "2",
			"\$\$" => "2",
			"\$\r" => "2",
			"\$\n" => "2",
			"Page" => "3",
			"UninstPage" => "3",
			"AddBrandingImage" => "4",
			"AllowRootDirInstall" => "4",
			"AutoCloseWindow" => "4",
			"BGGradient" => "4",
			"BrandingText" => "4",
			"Caption" => "4",
			"ChangeUI" => "4",
			"CheckBitmap" => "4",
			"CompletedText" => "4",
			"ComponentText" => "4",
			"CRCCheck" => "4",
			"DetailsButtonText" => "4",
			"DirShow" => "4",
			"DirText" => "4",
			"FileErrorText" => "4",
			"InstallButtonText" => "4",
			"InstallColors" => "4",
			"InstallDir" => "4",
			"InstallDirRegKey" => "4",
			"InstProgressFlags" => "4",
			"InstType" => "4",
			"LicenseBkColor" => "4",
			"LicenseData" => "4",
			"LicenseText" => "4",
			"LoadLanguageFile" => "4",
			"Name" => "4",
			"Icon" => "4",
			"OutFile" => "4",
			"PluginDir" => "4",
			"SetFont" => "4",
			"ShowInstDetails" => "4",
			"ShowUninstDetails" => "4",
			"SilentInstall" => "4",
			"SilentUnInstall" => "4",
			"SpaceTexts" => "4",
			"UninstallButtonText" => "4",
			"UninstallCaption" => "4",
			"UninstallIcon" => "4",
			"UninstallSubCaption" => "4",
			"UninstallText" => "4",
			"WindowIcon" => "4",
			"XPStyle" => "4",
			"SetCompress" => "4",
			"SetCompressor" => "4",
			"SetDatablockOptimize" => "4",
			"SetDateSave" => "4",
			"SetOverwrite" => "4",
			"SetPluginUnload" => "4",
			"AddSize" => "4",
			"Section" => "4",
			"SectionEnd" => "4",
			"SectionIn" => "4",
			"SubSection" => "4",
			"SubSectionEnd" => "4",
			"Delete" => "5",
			"File" => "5",
			"Exec" => "5",
			"ExecShell" => "5",
			"ExecWait" => "5",
			"Rename" => "5",
			"RMDir" => "5",
			"ReserveFile" => "5",
			"SetOutPath" => "5",
			"DeleteINISec" => "5",
			"DeleteINIStr" => "5",
			"DeleteRegKey" => "5",
			"DeleteRegValue" => "5",
			"EnumRegKey" => "5",
			"EnumRegValue" => "5",
			"ExpandEnvStrings" => "5",
			"ReadEnvStr" => "5",
			"ReadINIStr" => "5",
			"ReadRegDWORD" => "5",
			"ReadRegStr" => "5",
			"WriteINIStr" => "5",
			"WriteRegBin" => "5",
			"WriteRegDWORD" => "5",
			"WriteRegStr" => "5",
			"CallInstDLL" => "5",
			"CopyFiles" => "5",
			"CreateDirectory" => "5",
			"CreateShortCut" => "5",
			"GetDLLVersion" => "5",
			"GetDLLVersionLocal" => "5",
			"GetFileTime" => "5",
			"GetFileTimeLocal" => "5",
			"GetFullPathName" => "5",
			"GetTempFileName" => "5",
			"SearchPath" => "5",
			"SetFileAttributes" => "5",
			"RegDLL" => "5",
			"UnRegDLL" => "5",
			"Abort" => "5",
			"Call" => "5",
			"ClearErrors" => "5",
			"GetCurrentAddress" => "5",
			"GetFunctionAddress" => "5",
			"GetLabelAddress" => "5",
			"Goto" => "5",
			"IfErrors" => "5",
			"IfFileExists" => "5",
			"IfRebootFlag" => "5",
			"IntCmp" => "5",
			"IntCmpU" => "5",
			"MessageBox" => "5",
			"Return" => "5",
			"Quit" => "5",
			"SetErrors" => "5",
			"StrCmp" => "5",
			"FileClose" => "5",
			"FileOpen" => "5",
			"FileRead" => "5",
			"FileReadByte" => "5",
			"FileSeek" => "5",
			"FileWrite" => "5",
			"FileWriteByte" => "5",
			"FindClose" => "5",
			"FindFirst" => "5",
			"FindNext" => "5",
			"InitPluginsDir" => "5",
			"SetShellVarContext" => "5",
			"Sleep" => "5",
			"StrCpy" => "5",
			"StrLen" => "5",
			"Exch" => "5",
			"Pop" => "5",
			"Push" => "5",
			"IntFmt" => "5",
			"IntOp" => "5",
			"Reboot" => "5",
			"SetRebootFlag" => "5",
			"LogSet" => "5",
			"LogText" => "5",
			"SectionSetFlags" => "5",
			"SectionGetFlags" => "5",
			"SectionSetText" => "5",
			"SectionGetText" => "5",
			"BringToFront" => "5",
			"CreateFont" => "5",
			"DetailPrint" => "5",
			"FindWindow" => "5",
			"GetDlgItem" => "5",
			"HideWindow" => "5",
			"IsWindow" => "5",
			"SendMessage" => "5",
			"SetAutoClose" => "5",
			"SetBrandingImage" => "5",
			"SetDetailsView" => "5",
			"SetDetailsPrint" => "5",
			"SetStaticBkColor" => "5",
			"SetWindowLong" => "5",
			"ShowWindow" => "5",
			"LoadLanguageFile" => "5",
			"LangString" => "5",
			"LangStringUP" => "5",
			"license" => "6",
			"components" => "6",
			"directory" => "6",
			"instfiles" => "6",
			"uninstConfirm" => "6",
			"/TRIM" => "6",
			"/LANG" => "6",
			"/windows" => "6",
			"/NOCUSTOM" => "6",
			"/CUSTOMSTRING" => "6",
			"/COMPONENTSONLYONCUSTOM" => "6",
			"hide" => "6",
			"show" => "6",
			"nevershow" => "6",
			"normal" => "6",
			"silent" => "6",
			"silentlog" => "6",
			"on" => "6",
			"off" => "6",
			"auto" => "6",
			"force" => "6",
			"zlib" => "6",
			"bzip2" => "6",
			"try" => "6",
			"ifnewer" => "6",
			"manual" => "6",
			"alwaysoff" => "6",
			"/e" => "6",
			"RO" => "6",
			"/REBOOTOK" => "6",
			"/nonfatal" => "6",
			"/a" => "6",
			"/r" => "6",
			"/oname" => "6",
			"SW_SHOWNORMAL" => "6",
			"SW_SHOWMAXIMIZED" => "6",
			"SW_SHOWMINIMIZED" => "6",
			"/NOUNLOAD" => "6",
			"/SILENT" => "6",
			"/FILESONLY" => "6",
			"/SHORT" => "6",
			"MB_OK" => "6",
			"MB_OKCANCEL" => "6",
			"MB_ABORTRETRYIGNORE" => "6",
			"MB_RETRYCANCEL" => "6",
			"MB_YESNO" => "6",
			"MB_YESNOCANCEL" => "6",
			"MB_ICONEXCLAMATION" => "6",
			"MB_ICONINFORMATION" => "6",
			"MB_ICONQUESTION" => "6",
			"MB_ICONSTOP" => "6",
			"MB_TOPMOST" => "6",
			"MB_SETFOREGROUND" => "6",
			"MB_RIGHT" => "6",
			"MB_DEFBUTTON1" => "6",
			"MB_DEFBUTTON2" => "6",
			"MB_DEFBUTTON3" => "6",
			"MB_DEFBUTTON4" => "6",
			"IDABORT" => "6",
			"IDCANCEL" => "6",
			"IDIGNORE" => "6",
			"IDNO" => "6",
			"IDOK" => "6",
			"IDRETRY" => "6",
			"IDYES" => "6",
			"current" => "6",
			"all" => "6",
			"true" => "6",
			"false" => "6",
			"/TIMEOUT" => "6",
			"/IMGID" => "6",
			"/RESIZETOFIT" => "6",
			"none" => "6",
			"listonly" => "6",
			"textonly" => "6",
			"both" => "6",
			"lastused" => "6",
			"/ITALIC" => "6",
			"/UNDERLINE" => "6",
			"/STRIKE" => "6",
			"smooth" => "6",
			"!include" => "7",
			"!cd" => "7",
			"!echo" => "7",
			"!error" => "7",
			"!packhdr" => "7",
			"!system" => "7",
			"!warning" => "7",
			"!verbose" => "7",
			"!define" => "7",
			"!ifdef" => "7",
			"!ifndef" => "7",
			"!else" => "7",
			"!endif" => "7",
			"!insertmacro" => "7",
			"!macro" => "7",
			"!macroend" => "7",
			"!undef" => "7",
			"MUI_PRODUCT" => "8",
			"MUI_VERSION" => "8",
			"MUI_WELCOMEPAGE" => "8",
			"MUI_LICENSEPAGE" => "8",
			"MUI_COMPONENTSPAGE" => "8",
			"MUI_DIRECTORYPAGE" => "8",
			"MUI_STARTMENUPAGE" => "8",
			"MUI_STARTMENUVARIABLE" => "8",
			"MUI_STARTMENUDEFAULTFOLDER" => "8",
			"MUI_FINISHPAGE" => "8",
			"MUI_FINISHPAGE_RUN" => "8",
			"MUI_FINISHPAGE_RUN_PARAMETERS" => "8",
			"MUI_FINISHPAGE_RUN_NOTCHECKED" => "8",
			"MUI_FINISHPAGE_SHOWREADME" => "8",
			"MUI_FINISHPAGE_SHOWREADME_NOTCHECKED" => "8",
			"MUI_FINISHPAGE_NOAUTOCLOSE" => "8",
			"MUI_FINISHPAGE_NOREBOOTSUPPORT" => "8",
			"MUI_ABORTWARNING" => "8",
			"MUI_CUSTOMPAGECOMMANDS" => "8",
			"MUI_CUSTOMGUIINIT" => "8",
			"MUI_UNINSTALLER" => "8",
			"MUI_UNCONFIRMPAGE" => "8",
			"MUI_UNCUSTOMPAGECOMMANDS" => "8",
			"MUI_UNCUSTOMGUIINIT" => "8",
			"MUI_UI" => "8",
			"MUI_ICON" => "8",
			"MUI_UNICON" => "8",
			"MUI_CHECKBITMAP" => "8",
			"MUI_FONT" => "8",
			"MUI_FONTSIZE" => "8",
			"MUI_FONT_HEADER" => "8",
			"MUI_FONTSIZE_HEADER" => "8",
			"MUI_FONTSTYLE_HEADER" => "8",
			"MUI_INSTALLCOLORS" => "8",
			"MUI_PROGRESSBAR" => "8",
			"MUI_SPECIALINI" => "8",
			"MUI_SPECIALBITMAP" => "8",
			"MUI_BGCOLOR" => "8",
			"MUI_SYSTEM" => "8",
			"MUI_LANGUAGE" => "8",
			"MUI_BRANDINGTEXT" => "8",
			"MUI_SECTIONS_FINISHHEADER" => "8",
			"MUI_UNFINISHHEADER" => "8",
			"MUI_FUNCTIONS_DESCRIPTION_BEGIN" => "8",
			"MUI_FUNCTIONS_DESCRIPTION_TEXT" => "8",
			"MUI_FUNCTIONS_DESCRIPTION_END" => "8",
			"MUI_PAGECOMMAND_WELCOME" => "8",
			"MUI_PAGECOMMAND_LICENSE" => "8",
			"MUI_PAGECOMMAND_COMPONENTS" => "8",
			"MUI_PAGECOMMAND_DIRECTORY" => "8",
			"MUI_PAGECOMMAND_INSTFILES" => "8",
			"MUI_PAGECOMMAND_FINISH" => "8",
			"MUI_UNPAGECOMMAND_CONFIRM" => "8",
			"MUI_UNPAGECOMMAND_INSTFILES" => "8",
			"MUI_INSTALLOPTIONS_EXTRACT" => "8",
			"MUI_HEADER_TEXT" => "8",
			"MUI_INSTALLOPTIONS_DISPLAY" => "8",
			"MUI_INSTALLOPTIONS_INITDIALOG" => "8",
			"MUI_INSTALLOPTIONS_SHOW" => "8",
			"MUI_INSTALLOPTIONS_READ" => "8",
			"MUI_INSTALLOPTIONS_WRITE" => "8",
			"MUI_RESERVEFILE_WELCOMEFINISHPAGE" => "8",
			"MUI_RESERVEFILE_INSTALLOPTION" => "8",
			"MUI_RESERVEFILE_LANGDLL" => "8"
		);

		// Special extensions

		// Each category can specify a PHP function that returns an altered
		// version of the keyword.

		$this->linkscripts = array(
			"1" => "donothing",
			"2" => "donothing",
			"3" => "donothing",
			"4" => "donothing",
			"5" => "donothing",
			"6" => "donothing",
			"7" => "donothing",
      "8" => "donothing");
	}

	function donothing($keywordin)
	{
		return $keywordin;
	}
}
?>
