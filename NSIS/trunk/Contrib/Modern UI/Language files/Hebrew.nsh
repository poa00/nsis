;NSIS Modern User Interface - Language File
;Compatible with Modern UI 1.65

;Language: Hebrew (1037)
;By Yaron Shahrabani

;--------------------------------

!insertmacro MUI_LANGUAGEFILE_BEGIN "HEBREW"

  !define MUI_LANGNAME "Hebrew" ;Use only ASCII characters (if this is not possible, use the English name)
  
  !define MUI_TEXT_WELCOME_INFO_TITLE "$(^Name) ������ ����� ���� ������ ��"
  !define MUI_TEXT_WELCOME_INFO_TEXT "$_CLICK\r\n\r\n.����� ����� �� ������ ���� ���� ����� ������. ����� �� ����� ���� ����� ���� ����� ��� ������ �����\r\n\r\n .$(^Name) ��� �� ���� ����� ����� ������ ��"
  
  !define MUI_TEXT_LICENSE_TITLE "���� �����"
  !define MUI_TEXT_LICENSE_SUBTITLE ". $(^Name) ��� ���� ����� ������ ���� �����"
  !define MUI_INNERTEXT_LICENSE_TOP ".���� ����� ���� ������ Page Down ��� ��"
  !define MUI_INNERTEXT_LICENSE_BOTTOM ".�� �� ����� ����� ������$(^Name) �� ��� ���� �� ���� ������, ��� �� '��� �����' ��� ������. �� ���� ������ ��"
  !define MUI_INNERTEXT_LICENSE_BOTTOM_CHECKBOX "$_CLICK .$(^Name) �� ��� ���� �� ���� �����, ��� �� ���� ������ �����. ����� ���� �� ���� ����� ���� ������ ��"
  !define MUI_INNERTEXT_LICENSE_BOTTOM_RADIOBUTTONS "$_CLICK .$(^Name) �� ��� ���� �� ���� �����, ��� ������� ������� �����. ����� ���� �� ����� ���� ������ ��"
  
  !define MUI_TEXT_COMPONENTS_TITLE "��� ������"
  !define MUI_TEXT_COMPONENTS_SUBTITLE ".������ ������ $(^Name) ��� ���� ������ ��"
  !define MUI_INNERTEXT_COMPONENTS_DESCRIPTION_TITLE "�����"
  !define MUI_INNERTEXT_COMPONENTS_DESCRIPTION_INFO ".���� �� ����� ��� ���� ����� ���� ����� �������"
  
  !define MUI_TEXT_DIRECTORY_TITLE "��� ����� ������"
  !define MUI_TEXT_DIRECTORY_SUBTITLE ".$(^Name) ��� �� ������� �� ��� ������� ������ ��"
  
  !define MUI_TEXT_INSTALLING_TITLE "�����"
  !define MUI_TEXT_INSTALLING_SUBTITLE ".����� $(^Name) -��� ���� ���� � "
  
  !define MUI_TEXT_FINISH_TITLE "������ ������"
  !define MUI_TEXT_FINISH_SUBTITLE ".������ ������ ������"
  
  !define MUI_TEXT_ABORT_TITLE "������ �����"
  !define MUI_TEXT_ABORT_SUBTITLE ".������ �� ������ ������"
  
  !define MUI_BUTTONTEXT_FINISH "&����"
  !define MUI_TEXT_FINISH_INFO_TITLE "$(^Name) ����� �� ��� ������ ��"
  !define MUI_TEXT_FINISH_INFO_TEXT "����� ������ $(^Name)\r\n\r\n��� �� ���� ���� .����� �� ����"
  !define MUI_TEXT_FINISH_INFO_REBOOT "?��� ������ ����� ��� .$(^Name) ����� ����� �� ����� ���� ����� �� �����"
  !define MUI_TEXT_FINISH_REBOOTNOW "���� ���"
  !define MUI_TEXT_FINISH_REBOOTLATER "������ ����� ����� ����� ����"
  !define MUI_TEXT_FINISH_RUN "$(^Name) &��� ��"
  !define MUI_TEXT_FINISH_SHOWREADME "'&��� ���� '��� ����"
  
  !define MUI_TEXT_STARTMENU_TITLE "��� ������ ������ ����"
  !define MUI_TEXT_STARTMENU_SUBTITLE ".��� ������� ����� ���� ���� ���� �� �� ������ ���� �� �������"
  !define MUI_INNERTEXT_STARTMENU_TOP ".��� ������� ������ ���� �� ������ ���� �� ������ ���� ���� �������. �������� �� ����� �� �� ������� ���� ����� ������ ����"
  !define MUI_INNERTEXT_STARTMENU_CHECKBOX "�� ����� ������ ���"
  
  !define MUI_TEXT_ABORTWARNING "?$(^Name) ��� ��� ���� ������� ���� ������ �����"  
  
  
  !define MUI_UNTEXT_CONFIRM_TITLE "$(^Name) ��� ��"
  !define MUI_UNTEXT_CONFIRM_SUBTITLE ".������ $(^Name) ��� ��"
  
  !define MUI_UNTEXT_UNINSTALLING_TITLE "����"
  !define MUI_UNTEXT_UNINSTALLING_SUBTITLE ".���� ������ $(^Name) ��� ���� ���� �-"
    
  !define MUI_UNTEXT_FINISH_TITLE "����� ������"
  !define MUI_UNTEXT_FINISH_SUBTITLE ".����� ������ ������"
  
  !define MUI_UNTEXT_ABORT_TITLE "����� �����"
  !define MUI_UNTEXT_ABORT_SUBTITLE ".����� �� ������ ������"
  
!insertmacro MUI_LANGUAGEFILE_END
