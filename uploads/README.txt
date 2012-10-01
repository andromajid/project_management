QPST Version 2.7
19 September 2008

This readme covers important information concerning QPST 2.7.

Table of Contents

1. Installation notes
2. What's new in this release
3. Known issues
4. Release notes

----------------------------------------------------------------------

1. INSTALLATION NOTES

When installing QPST on a Win2K or WinXP system, the installing
user may need administration privileges.  This is a requirement to allow
the installer to update some system DLLs.

QPST no longer installs or runs on WinNT, Win95 or Win98.

----------------------------------------------------------------------

2. WHAT'S NEW

QPST 2.7 includes these additional features:

1) The installer will now install the SCRAMP utility in QPST\SCRAMP.

2) You MUST use the QUALCOMM USB device driver or a QPST compatible
device driver on your PC if you wish to use QPST with a USB port. When
used with QPST, other drivers can cause your PC to hang when you reset
or disconnect the mobile. You will have to restart your PC to recover.
Or you may find that the phone disappears from the QPST configuration
when it resets, and not reappear until you restart QPST.

----------------------------------------------------------------------

3. KNOWN ISSUES

General:

The QPST has some known problems when running on a
system that is running low on disk space.  (Less than 10 Megabytes.)
In this situation, make more disk space available before continuing to
run QPST.  Note that this limitation applies mostly to the
disk drive that contains the QPST executables and DLLs.
However, it can also be a problem when saving NV Backups and/or
Service Programming information on other drives as well.

Some SURFs and FFA mobiles support both USB and serial port connectivity.
QPST supports USB on Windows 2000 and Windows XP through a QUALCOMM USB
device driver. You must use the mobile's Port Mapper user interface to
select either USB or a UART for diagnostics. You can connect your PC to
the mobile's serial or USB port, but not both at the same time. If you
connect your PC to your mobile through USB, and your mobile uses power
from a UDIP or other powered data interface, you should either disconnect
the serial cable from the UDIP, or provide power to the mobile with a
battery charger. Connecting QPST to more than one port of the same mobile
will cause Software Download to fail.

----------------------------------------------------------------------

4. RELEASE NOTES

8/29/08 QPST 2.7.323
1) WLEditor changes:
   -System Records now contain columns for Handoff Permitted, Hidden SSID and WLAN Sec Mode.    
   -Profiles now contain columns for Server Name Len and Server Name. These columns are active when Authentication is set to TLS, PEAP or TTLS.
   -When saving, Profile Encryption and Authentication types are validated against WLAN Sec Mode of referring System Records.
2) Service Programming IWLAN bitmask items have been change to a bitmask control.
3) Fixed multi-image download file path control, which would occasionally report an incorrect path.
4) Added NV backup support for items 5895-6053.
5) Service Programming: Changed NV value for 4GV wideband setting from 0x8028 to 0x46.
6) Added support for new model IDs:
ID 1, FFA7527-WinMob
ID 2, FFA/SURF7630
ID 3, FFA/SURF1600-Linux
ID 4, FFA/SURF1700-WinCE
ID 200, SURF/FFA7600-Linux
ID 201, R-MSM7630
ID 242, FFA/SURF1500-Linux
ID 245, FFA/SURF1600-Linux
ID 246, FFA/SURF1500-Linux
ID 4002, SURF7625-Linux
ID 4003, SURF7625-Linux

7/3/08 QPST 2.7.320
1) Backup all Bluetooth NV items in Software Download.
2) Add support for NV items 5701-5894.
3) Update RF NV Manager to version 1.4.31.
4) Added support for Mobile IPv6 to Service Programming.
5) Added support for bandclass bits 16:63 to UMTS Service Programming.
6) For Automation interface method CopyPCToPhone, change share mode of PC file from exclusive to
deny write to allow other reader applications to open the file.
7) The synchronization code added to 2.7.307 does not work with older phones. They return an error
if the max protocol version in the Hello command isn't 2. Modified synchronization code to use 2
for this parameter.
8) Added support for SURF8200A-RTR6285 as model ID 8.
9) Add Service Programming support for MSM6295.
10) Add Service Programming support for Gobi 2000 model ID 12.
11) Add Service Programming support for models 5 (FFA/SURF 7625 WinMob),
    6 (FFA/SURF 7600 WinMob), 7 (FFA/SURF QST-1105 Linux).
12) Added band classes 18 and 19 to generic cdma and 17, 18 and 19 to generic hdr to PRL editor.
13) Increased timeout to transition to download mode from 30 to 45 seconds.
14) Added support for IWLAN (wireless LAN interworking) to Service Programming.

5/22/08 QPST 2.7.312
1) Added NV backup of items 5599-5700.
2) Added support for Secure Boot 2.0 to MultiImageDownload Automation function.
QPST will use the model number to decide which download protocol (standard
multi-image, or SB 2.0) to use.
3) Change model 13 from SB 2.0 to multi-image boot.
4) Add Service Programming support for MSM7625 model 13.

4/22/08 QPST 2.7.310

************************** IMPORTANT **************************

1) During NV item backup a Microsoft file API was returning errors once the count of stored
NV items grew above a certain limit. This limit was dynamic and unpredictable. This QPST version
uses a different algorithm to store items in the QCN file to work around this problem.

QCN files created with this QPST version are not compatible with QPST software versions released
prior to version 2.7.310. This version can read NV items from pre-2.7.310 QCN files, but QPST versions
older than 2.7.310 can not read NV items from QCN files produced by this QPST version.

QCNView will identify new QCN files as having major version 2. The original QCN file format used
version 1.

If you are providing QCN files produced with this QPST version to other QPST users that have an
older QPST version installed, please also provide the installer for this version.

************************** IMPORTANT **************************

2) Added Service Programming support for QSD8250/8650 models.
3) Updated RF NV Item Manager to 1.4.30.
4) Added NV item backup support for items 5285-5598 to Software Download.
5) Added support for "raw" Apps file system download to Software Download.
6) Add Download and Provisioning support for model 26 (QST1105).
7) Add Provisioning support for models 22, 24 (QSC1100), and 23, 25 (QSC1110).
8) Add combo box to Download to allow user to select boot method (SB 1.0 a.k.a multi-image,
SB 2.0) for a mobile already in download mode.
9) Add support to Service Programming for IPV6 Neighbor Discovery provisioning.
10) Add Software Download support for model 13 (FFA/SURF 7625) and 14 (QSC 7630).

3/5/08 QPST 2.7.303
1) Added Software Download support for:
model 15 = SURF/FFA QSD8250 Rev 2.0
model 16 = SURF/FFA QSD8650 Rev 2.0
model 17 = SURF/FFA QSD8250 Rev 1.0
model 18 = SURF/FFA QSD8650 Rev 1.0
model 22 = SURF-QSC1100
model 23 = FFA-QSC1110
model 24 = FFA-QSC1100
model 25 = SURF-QSC1110
2) Added Service Programming support for:
model 19 = QSC6270/QSC6240
3) Added support for model 29 = FFA/SURF6290.

1/31/08 QPST 2.7.301
1) Roaming List Editor: Added UMB acquisition record. Added MCC-MNC based system record.
2) Increase wait time for download mode from 15 to 30 seconds.
3) Added NV backup support for items 5270-5484.
4) Updates RF NV Item Manager to 1.4.28.
5) Added support for DSP download to standard multi-image download.

12/11/07 QPST 2.7.295
1) Added support for NV items 5046-5269.
2) Added support for PRL files over 8k.
3) Add preliminary support for Secure Boot 2.0 and MSM7800.
4) Roaming List Editor: Added UMB acquisition record. Added MCC-MNC based system record.
5) Update RF NV Item Manager to 1.4.27.

9/21/07 QPST 2.7.293
1) Fixed problem where QPST port server could crash if mobile reconnects to USB during polling
   for a data modem.
2) Added NV backup support for items 4935-5045.
3) Add check to NV backup to make sure item returned was item requested.
   This error will produce the message "NV item received was not the one requested - see DBG file".
4) Update RF NV Manager to version 1.4.26.
5) Add support for concatenated PRL write to Service Programming.
6) Add -q command line switch to QCNView for quite mode. Works like -s but doesn't
   display any dialog boxes.
7) Fix problem where QPST server may crash during auto shut down if it has a TCP/IP client connected.

8/22/07 QPST 2.7.290
1) Updated Service Programming default values for IPv6.
2) For Automation interface phone reset function, test phone status before sending offline command.
   Offline will fail if phone is in download mode causing phone reset to fail.
3) Memory debug application automation - changed SaveAllRegions function to return NOERROR on success.
4) Update Service Programming to add DVB-H support to MSM6280 and 7200.
5) Service Programming will now write both the legacy and new GPS IP address and port NV items.
   It will attempt to read both and display whichever one returns data, giving priority
   to the new NV items.
6) Added NV backup support for items 4795-4934.
7) Updated RF NV Item Manager to version 1.4.25.
8) Added support for new phone IDs:
ID, name, flash type, flash programmer name
31,FFA/SURF7225,NAND,NPRG7225
32,FFA6246-RTR6285-A2,NAND,NPRG6246
33,SURF6246-RTR6285-A2,NAND,NPRG6246
37,FFA6175-RF6500 (NOR),NOR,APRG6800
38,SURF6175-RF6500 (NOR),NOR,APRG6800B
39,FFA6175-RF6500 (NAND),NAND,NPRG6800
40,SURF6175-RF6500 (NAND),NAND,NPRG6800B
41,FFA6575-RF6500 (NOR),NOR,APRG6800
42,SURF6575-RF6500 (NOR),NOR,APRG6800B
43,FFA6575-RF6500 (NAND),NAND,NPRG6800
44,SURF6575-RF6500 (NAND),NAND,NPRG6800B
45,FFA6800-RF6500,NOR,APRG6800
46,SURF6800-RF6500,NOR,APRG6800B
9) Add support to Software Download for user partition download.
   The partition table in the mobile must have a attribute set
   for these partitions indicating you can download to them.
   You cannot use this feature to download to the standard
   partitions. The SD GUI has a new tab, "User Partitions" where
   you can specify the partition name and path to the data file.
   The files are downloaded in sequence from the top of the list
   to the bottom. The first file specified also determines the
   first location SD looks for the flash programmer.

4/6/07 QPST 2.7.282
1) Add option to EFS Explorer to control whether the application disables mobile sleep.
   (1) Always disable sleep (legacy behavior), (2) Never disable, (3) Disable if mobile
   responds to WCDMA status request (new default behavior).
2) For Service Programming, add MDM1000 to list of mobiles that support UMTS.
3) Add support for MSM6235, models 55, 56, 64, 70.
4) Add NV Backup support for items 4679-4794.
5) Updated RF NV Item Manager to 1.4.22.
6) Enable NV item file backup/restore from /nv/items.
7) Change model 253 back to SURF7500. Add model 47 as SURF7500a.

3/28/07 QPST 2.7.280
1) PRL Editor, changed cdma pcs channel lower limit to 0 and upper limit to 1199.
2) Update RF NV Item Manager to 1.4.21.
3) Add NV backup support for items 4432-4678.
4) Add support for FFA7500a (57), MDM1000 (88), and SURF7500a (253).
5) Add support for WinMobile to Software Download. You must use the Advanced button to enable
   download of the WinMobile image file (flash.bin). Selecting this image for download will deselect
   the Apps and Apps Header images, and enable the Apps Boot Loader and Apps Boot Loader Header
   images.

1/22/07 QPST 2.7.275
1) For dual-core MSMs, both the apps and modem processor can have a file system. Standard EFS command
   subsystem (DIAG_SUBSYS_FS) controls modem EFS on 6k and old 7k series MSMs. DIAG_SUBSYS_FS_ALTERNATE
   subsystem controls apps file system on new 7k series MSMs. For new 7k builds we want to access the
   apps filesystem. Modem file system commands not implemented, except for CEFS read. Therefore try
   Hello command with _ALTERNATE subsystem. If it works, use _ALTERNATE subsystem. Otherwise fall back
   to legacy FS subsystem ID.
2) Modify EFS free space calculation to exclude MMCs.
3) Allow QPST to connect to model numbers it doesn't recognize. This should allow QPST to connect to
   all customer phones.
4) Correct Service Programming MEID display by swapping low and high DWORDs.
5) Added models 75 (6800/ThinUI), 81 (FFA6260 NOR), 90 (SURF6260 NOR).
6) For Service Programming MIP, correct indexes for Rm and Um, was 0, 1 should be 1, 0.
   These have been wrong since the original implementation in 2003.
7) The QPST port server can accept a TCP/IP connection from a mobile. The Configuration application
   IP Server tab provides controls to enable this feature, use an IP address and port assigned by
   Winsock, or use address and port values provided by the user. The phone must act as a client and
   establish a connection to QPST. Software Download is not supported.
8) Added MSM7600 to EVDO phone models that support UMTS, and added WCDMA security to these models.
9) Fix problem with multi-image download when partition table doesn't match.
   If you proceed past the warning dialog, none of the 4 apps files get downloaded.
10) Modify Software Download CEFS to support backup/restore of legacy and alternate file systems.

1/3/07 QPST 2.7.268
1) RL Editor: Added ‘F’ as an allowable wildcard character in the MNC field for system
   records. In the original implementation, there is a default trailing ‘F’ when only two
   digits are used for the MNC. This ‘F’ is not displayed. The new version retains the
   old behavior unless an ‘F’ is used as a wildcard in which case the trailing ‘F’ is shown.
2) Added/changed model designations:      
   Model 115, was SURF6300-BB, now FFA7600-7200 (MSM7200a)
   Model 116, was SURF6300-ZRF6000, now SURF7600-7200 (MSM7200a)
   Model 127, was FFA-ZRF6000-2, now FFA7600-7600 (MSM7600)
   Model 128, was SURF6200-UMTSG, now SURF7600-7600 (MSM7600)
3) Support NV items through 4431.
4) Add automation support for memory debug app. See mdb_saveallregions.pl sample.
5) Add deregistration retries to Service Programming Mobile IP tab.
6) Add support for Spansion WS256N MirrorBit device (aprg6500.hex).
7) Added more error checking to Memory Debug interactive application and automation interface.
8) Added support for four QSC60x5 models FFA/NOR (96), SURF/NOR (97),
   FFA/NAND (117), SURF/NAND (119).
9) Remove write-only item NV_GPSONE_PASSWORD_I from NV backup.
10) Update NV RF Item Manager to 1.4.20.

10/23/06 QPST 2.7.264
1) Update NV Item Manager to 1.4.19.
2) Fix timing problem that occasionally causes script-driven Software
   Download to abort with a 'state machine returned error' failure.

9/27/06 QPST 2.7.258
1)  Added support for NV items 4207-4392.
2)  Added MSM6280A support as models 130, 136.
3)  Add HTML file to replace FTM application. We will discontinue distributing the FTM
    application with this build.
4)  Added WLAN Editor application to installer.
5)  Update user guide to revision K.
6)  Update automation script examples.
7)  Update MSM6550 ARMPRG to add support for Spansion WS512P.
8)  PRL Editor, added band class 15: 1700/2100MHZ-AWS for cdma generic and hdr generic acquisition types.
9)  Service Programming, add "Multi-RmNet" and "Multi-RmNet + modem" selection to the
    "USB Data Device Enumeration" control in the RmNet tab.
10) Added band class 16: US2.5G for cdma generic and hdr generic acquisition types to PRL editor.
11) Software Download NV Restore, display PDP restore fail warning in yellow instead of red to emphasize
    this is a warning only.
12) Updated RF NV Item Manager to version 1.4.18.
13) Updated aprg6050 to include support for Spansion MirrorBit devices.

7/7/06 QPST 2.7.250
1) Update RF NV Manager to version 1.4.17.
2) Update NPRG6275.hex to pick up fix for 1-bit ECC errors in the spare area.
3) Added NV backup of NV_FTM_MODE_I item.
4) Adding support for models 137 (QSC60X5), 138 (QSC60X5), 140 (MSM7500), 161 (MSM7500), 169 (MSM6800 65nm).

6/6/06 QPST 2.7.249
1) Allow USB ports identified as modem ports to connect to QPST.
2) A registry setting is now available to change the maximum serial port baud rate used by QPST
   from 115.2 Kbps to a user-selected rate. Using a baud rate above 115.2 Kbps requires modifying
   AMSS code, using a special serial port card in the PC, and may require special RS-232 cabling.
   Standard PC serial ports generally do not work above 115.2 Kbps.

   Since this feature replaces the 115.2 Kbps baud rate with a user-selected rate, some
   AMSS features that always run at 115.2 Kbps (such as software download) will no longer work.

   The QPST port server reads the value from the registry when it starts and uses it in the BaudRate
   member of the DCB (look up "dcb" on msdn.microsoft.com for further information). The value you
   should use for BaudRate depends on the serial port hardware and its device driver. Some serial
   port hardware implementations use switchable frequency dividers or other baud rate encoding;
   consult the serial port user guide or manufacturer for more information on the correct encoding
   of the BaudRate value. In many cases you can use a value equal to the baud rate in bits-per-second
   (e.g. use a value of 230400 for 230.4Kbps).

   Use EXTREME caution when making this or any other registry change. Changing the wrong
   registry key may cause the Windows operating system or an application to malfunction, possibly
   resulting in a unrecoverable loss of data.

   To change the baud rate for all users edit the key:
   HKEY_LOCAL_MACHINE\Software\Qualcomm\QPST\PARAMS\PORT_SERVER

   Or, to change the baud rate for just the current user, edit:
   HKEY_CURRENT_USER\Software\Qualcomm\QPST\PARAMS\PORT_SERVER

   You will have to create the Qualcomm\QPST\PARAMS\PORT_SERVER registry keys if they don't
   currently exist. You may not have the privilege to modify HKEY_LOCAL_MACHINE.

   For either key, create a new DWORD value in the key using the name "baud_rate_" plus your
   COM port name (e.g. baud_rate_COM1 for port COM1) and set it to the encoded baud rate.

4/7/06 QPST 2.7.247
1) Update user guide to rev J. Updates gang image chapter and online help.
2) Add support for NV items 4100-4188.
3) Update nprg6500.hex with software workaround for handling 1-bit error in ECC bytes.
4) For the Software Download automation interface, correct NV restore algorithm so it will
   work with files for which you don't have write access.
5) Add support for SURF7500 NOR flash model.
6) Update MSM6550 nandprg for 1-bit software ECC workaround.
7) Update RF NV Item Manager to version 1.4.16.
8) Implement SGSN, MSC, and RRC version settings on UMTS Service Programming (System tab).
9) Add individual file backup for BREW EDT application files.
10) Add NV backup of item 1791 et. al. to MSM6100, MSM6050, 6025, 6000 phones.
11) Update QPSTConfig.mbn file in Gang Image application to correct support for MSM6280.
12) Support EFS paths up to 1024 characters. Only affects automation interface.
13) Add models 166 (SURF/FFA6550), 172 (SURF6800 65nm), 176 (SURF6255A), 177 (FFA6255A),
    180 (SURF6245), 181 (FFA6245), 182 (FFA6260), 186 (SURF6260).
14) EFS Explorer: Make the "offline" option false. Fix a bug where you still get prompted about
    resetting the phone even if you have the offline option false.
15) Add MSM6550 models to EVDO-with-GSM list.
16) Clear MRU3 with MRU2 when writing PRL.
17) In automation interface return error code to caller of SendCommand.
18) Add CAIT "define phones" feature to ban specific commands from some phone types.
    You can enable/disable feature with registry setting:
    { HKLM or HKCU } SOFTWARE\QUALCOMM\QPST\PARAMS\PORT_SERVER
    Value: a DWORD named banned_commands. Set to 0/1 to disable/enable. If value missing, feature enabled.
19) Allow QPST to connect to unknown-type USB ports.

2/8/06 QPST 2.7.240
1) Update RF NV Manager to 1.4.14.
2) Update APRG6550.HEX for Intel Strataflash support.
3) Updated EULA.
4) Update EFS error code table and EFS Explorer error messages.
5) Added support for MSM7200 SURF and FFA models.
6) Roaming list editor, relabeled wcdma band classes I, II, III,
   IV, V and VI as BC1-IMT2G, BC2-PCS1.9G, BC3-1.8G, BC4-1.7G,
   BC5-850M and  BC6-800M. Also, added new band classes BC7-2.6G,
   BC8-900M and BC9-1.7G.
7) Added support for RmNet configuration to Service Programming.
8) Service Programming, UMTS System page: Add BC5, correct coding for BC8, 9, 9P.
9) For Software Download through the Automation interface, don't download pbl.mbn file when
   trusted (secure) mode set. AMSS builds that use trusted mode won't create this file.

12/20/05 QPST 2.7.234
1) Fix problem where QPST Automation PortType occasionally gets returned as a string such as
   one of the IDispatch method names.
2) Update NPRG6250SEC.HEX, adds image hash support, fixes endpoint toggle bit, uses new flash
   driver that ignores OP_RESULT bit for read status check.
3) Phone memory debug app: when saving memory regions the application now displays all files that
   will be overwritten, and asks for user's authorization to overwrite, up front instead of asking
   for authorization on each file individually during the save.
4) If the phone returns an error during directory iteration, make sure to close the file handle.
   Otherwise you can't do any further file operations on the phone.
5) Add MSM6280 to list of MSMs that use a PBL.
6) Add option to persist server settings to a file, QPST_Server.ini. This works around the problem
   where some users don't have access to the HKLM registry key. Will save port configuration and
   autoshutdown flag. Use registry setting that specifies the folder for the ini file to enable this
   feature (QPST bin folder in this example):
Windows Registry Editor Version 5.00
	
[HKEY_LOCAL_MACHINE\SOFTWARE\Qualcomm\QPST\2.0\Server]
"Server_INI_Files"="c:\\program files\\qpst\\bin\\"
  All users must have read/write/enumerate access to this directory.
7) In PRL Editor, change the mask on UMTSGeneric and UMTSPrefGeneric Band cells to accept 5 digits
   instead of 4.
8) Modify serial port code to not open NMEA, Data, or Unknown type ports. Opening an NMEA port can cause
   QPST to freeze. On USB port restart insure port still compatible. User could have swapped in a phone
   that maps NMEA to this port.
9) Fix multiple problems in Configuration Add Port that caused the display of the wrong port when you
    selected one from the list.
10) DmProxyWin modified to accept two-digit COM port numbers.
11) Added NV items 3640-4099 to NV backup and QCNView.
12) Remove code that retries EFS2 commands that return bad status or timeout. Now will only get the
    low-level QPST server retry on timeout.
13) Update FTM application to 6.10.0.
14) Update RF NV Item Manager to 1.4.10.
15) Increase armprg size from 64k to 256k for MSM7500 Software Download.
16) Don't download PBL when trusted (secure) mode set - AMSS build won't include a PBL file.
17) Include apps files for MSM7500 Software Download.

11/2/05 QPST 2.7.228
1) Modified Phone Memory Debug App file dialog to support new dialog style.
2) Added items 3634-3639, 885-888, CDMA NV items (item 10 et. al. - UMTS phones), to NV Backup.
3) Added support for MediaFLO phone.
4) Updated RF NV Manager to 1.4.8.
5) RLEditor: added support in acquisition record for CDMA generic and HDR generic Band Class 14.
6) Added total progress indicator to Software Download.
7) For multi-image download, query user for partition override if required. Remove checkbox option.
8) In Software Download, send a Close after Hello so that if the user tries a download after a QPST crash (phone already in streaming download mode) the previous download attempt gets terminated.
9) Add image hash code comparison to Software Download. If the hash code of the file matches the hash code of the partition in the phone, skip the download of the image.
10) Change 4GV narrowband service option from 0x8027 to 0x44 in Service Programming.
11) Add new gang image application, remove old one. User Guide and online help not updated yet.

10/12/05 QPST 2.7.225
1) Software Download will now look in the phone image directory first to find the nprg/aprg flash
programmer file. For multi-image download, it will use the modem image directory. IF not found it
will fall back to the version distributed with QPST.
2) Added NV items 3520-3633 to Software Download NV Backup.
3) Added six MSM6280 models.
4) Added two SQSC60x0 models.
5) Add backup of NV items 441, 946, to MSM6250 and MSM6275.
6) Add backup of factory NV items to all phones.
7) Add Phone Memory Debug App to QPST.

8/15/05 QPST 2.7.222
1) Added GetCOMPortList() to Automation server IAtmnServer interface.
   Returns list of available COM ports. See get_com_port_list.pl.
2) Update Config App Add Port dialog to filter ports based on diag/non-diag type.
3) Modify Remove Port to shut the port down and remove it from the QPST configuration immediately.
4) Update Automation interface to support Add/Remove port. See add_remove.pl.
5) NPRG7500.HEX : Use new flash drivers with MPU support.
6) Added NV items 3467-3519.
7) NPRG6250SEC.HEX : Erase failure of OTP block is skipped.
8) Add Get/Set EnablePort boolean property to IAtmnServer Automation interface. See enab_disab.pl.
9) Modify IAtmnServer Automation interface method GetPort to accept either a port name or a port ID
   for its parameter.
10) Correct problem in QPST server where a delayed response sent by DIAG_SUBSYS_CMD_VER_2_F could
    overwrite the initial response from the command.
11) Move Software Download Partition Override checkbox from MultiImage/OBL tab to Advanced dialog.
12) CEFS download will now work for a mobile already in download mode (you must choose the correct
    downloader in the Software Download Settings dialog).
13) Correct problem with EFS Explorer that prevented it from creating a zero-length file.

8/1/05 QPST 2.7.218
1) Added NV items 3384-3466.
2) NPRG6275.hex & NPRG6800.hex - added watchdog kicks to prevent reset while waiting for USB in-token.
3) APRG6275.hex & APRG6800.hex - added Spansion MLC NOR support.
4) Use shared read mode when opening MBN file for software download.
5) Display capture application modified to use the delayed response command if supported by the
   phone build.
6) FTM application updated to version 6.8.0.
7) RF NV item manager updated to version 1.4.6.

7/14/05 QPST 2.7.215
1) Fixed various problems with Software Download automation functions.
2) NPRG6250SEC.HEX : Add support for preservation of SIM Secure data.
3) FTM application version 6.7.0, RF NV Item Manager version 1.4.5.
4) Increase software download multi-image Open timeout from 3 to 10 seconds.
5) Added O_TRUNC to EFS2 write open, and set mode to 0666. Set read mode to 0444.
6) Change interpretation of EFS2 file time to Unix time epoch.

6/24/05 QPST 2.7.213
1) APRG6275/NPRG6275 - support added for Spansion MLC NOR.
2) NPRG7500 - USB support fixed.

6/9/05 QPST 2.7.212
1) For multi-image Software Download, if the user has enabled partition override and
NV backup/restore, always restore NV. Partition override erases flash including
NV, but the phone may still report the NV version it did with the previous
AMSS build. Software Download doesn't normally restore NV unless the new AMSS
build has a different version number then the previous build.
2) For MSM7500 and later, don't download the PBL file during Software Download.
3) Add AppVersion property to the root QPST Automation interface (IAtmnServer).
4) Update NPRG7500.hex to version 11.00.01 (Incorporates NAND ECC workaround, SMI support).
5) Software Download - partition file always required (removed checkbox).

6/3/05 QPST 2.7.210
1) Added two NV item groups (band pref and Bluetooth) to some MSM6250 models.
2) Add CEFS download to Software Download application. A CEFS file represents
a snapshot of the embedded file system. The download will replace the existing
file system with the contents of the CEFS file.

5/31/05 QPST 2.7.209
1) Updated NV RF Item Manager to 1.4.4.
2) Removed NV item 2824 from Software Download NV Backup.
3) Remove un-writable NV item NV_DIAG_SPC_UNLOCK_TTL_I from NV backup.
4) Updated NV Decoder.qdf file (RF NV Item Manager) with new WCDMA NV items.
5) Updated NPRG6250.hex:
   Correct handling of MIBIB when only one present
   Do not copy forward Progressive Boot page while programming AMSS
   Correct handling of OEMSBL swapping
6) Updated aprg/nprg for 6275 & 6800:
   Fix single MIBIB case on NAND - both MSMs
   Fix OEMSBL swapping on NAND - both MSMs
   Change NOR link address to match current builds dloadarm.c
   for 6800 only.  This will not be compatible with
   older builds, but is required for current builds.
7) Updated NPRG6550PB.hex, limits ELF segments in BIB to 16.
8) Check in first nprg7500.hex version.

4/29/05 QPST 2.7.206
1) Added support to Software Download and Automation interface for
download of application boot loader and boot loader header file.
2) Added preliminary MSM7500 download support.
3) Added NV items 3363-3383.
4) Added FFA6100-ZRF6155 and SURF6100-ZRF6155.

4/28/05 QPST 2.7.202
1) Added NV items 3245-3362.
2) Added MultiImageDownload and OTPImageDownload to IQSoftwareDownload
Automation interface. Added sample Perl scripts mi_dwnld_gui.pl and
obl_dwnld_gui.pl.
3) Updated FTM application to 6.6.0 and RF Item Manager to 1.4.3.
4) Added apps image download to Software Download.
5) Fix problem where QPST server occasionally would consume 100% CPU time.

4/18/05 QPST 2.7.200
1) Update nprg6800.hex to 09.00.02.
2) Fix NOR download to 16 Mbyte flash (> 255 blocks).
3) Added aprg6800.hex version 09.00.03.
4) Added EVRC service options for 4th generation voice (4GV) narrow- and wide-band.
5) Updated definitions of Dynamic Feature item command constants (subsystem 30) to
match new command set. Old command 6 had already been defined.
6) Added NV items 2985-3244 from MSM6500_NV.00.00.47.
7) FTM application updated to version 6.5.0.
8) RF NV Item Manager updated to version 1.4.2.
9) Changes to Service Programming:
"Data" tab:
 Set NV_DS_INCOMING_DATA_RLP_TIMEOUT from_I "Reduced Dormancy Timeout (ms)".
 Set NV_DS_DEFAULT_INACTIVITY_RESTORE_TIMEOUT_I from "Resume Default Dormancy Timeout (ms)"
 "PPP Config" tab:
 Set NV_DS_SIP_RM_NAI_I from "Tethered NAI" (Um only).
 "M.IP" tab:
 Set NV_DS_MIP_RM_NAI_I from "tethered nai".
10) Use 5 min timeout on partition command.
11) New NPRG6250SEC.hex version:
Erase chip with partition table override flash set without checking for partition table in NAND
Support Single Image to Multi-Image upgrade by using partition table override flag
Support download of Compact EFS2 image
Support download of FOTA UI binary image
Fixes placement of FOTA UI block and uses latest flash drivers.
12) New NPRG6250.hex version:
This downloader supports the erase flash command just added to the protocol.  It will be used
to downgrade multi-image boot builds to single image boot builds.
13) Add support to Software Download UI for flash erase. Set flash erase timeout to 2:00 minutes.
14) Increase restart timeout to 4:00 minutes to allow EFS rebuild after a flash erase.
15) Compact EFS download support added to Automation interface.
16) Modified USB monitor thread to correct phone reset detection problem.

3/14/05 QPST 2.7.193
1) Add online help to BuildGangImage. Show version on title bar.
2) Update user guide to add chapter for BuildGangImage.
3) First release of FFA6250 One-Time Programmable (OTP) Multi-image Secure Boot.
4) First release of SURF6255 support.
5) Support new item-based dynamic features.
6) Always enable PRL on UMTS UEs.
7) For multi-image download, take care of case where mobile is already in download mode.
8) Modify for updated MSM6550 NANDPRGS. Now have one NANDPRG for both 8- and 16-bit flash,
and one progressive boot nandprg for 8- and 16-bit flash.
9) Modify IQSoftwareDownload::RestoreNV Automation interface to accept a third argument,
allowESNMismatch. Set to 0 for normal restore, 1 to restore even if ESN in restore file
doesn't match ESN in phone. You must modify any Perl script that calls RestoreNV or you
will get a Win32::OLE(0.1005) error 0x8002000e: "Invalid number of parameters" error.
10) Updated aprg6275.hex and nprg6275.hex.

1/12/05 QPST 2.7.183
1) Added a "Port Shutdown" item to the Configuration application Port tab right-click
menu. Use this menu item to configure the server to send a reconfiguration command to
the phone when QPST shuts down. You can either send a command to switch the phone
back to data services mode, or a command to tell the phone to release the current port
and begin scanning all ports for activity (requires FEATURE_DIAG_MULTI_PORTS).
2) Enable Automation server GUI on the reset.pl sample Perl script.
3) Added Version "get" property ($portlist->Version) to the port list Automation
interface ($qpst->GetPortList()) to retrieve QPST build version.
4) Add models 230-232, 238-240, 248-250.
5) Modify loop initialization for Build Gang Image code that retrieves factory data.
6) Change PRL Editor to allow odd numbered channels for 2GHz band.
7) Update NV definitions to items 2742-2827.
8) If EFS Explorer tries to iterate a directory and the phone returns an error, change
the directory's icon to 'prohibited' rather than raising an error dialog.
9) Updated nprg6275.hex to 09.00.02.
10) Added aprg6275.hex and support for MSM6275 NOR flash download (mbn binary file type).
11) Updated FTM application to 6.4.1a.
12) Updated RF NV Manager application to 1.4.1.
13) Added support for FFA6550-EZRF6500 (8-bit NAND).
14) Update NPRG6800.hex.
15) Software Download Multi-image: Append a trailing "\" for the case where someone 
uses the Advanced option but doesn't terminate the path correctly.

1/7/05 QPST 2.7.175
1) Update file combo control to properly handle directory drag/drop.
2) Modify Software Download boot loader combo box to display a longer history list.
3) Flash Gang Image build application extensively modified per new requirements.

12/16/04 QPST 2.7.174
1) Update RF_NV_Manager to 1.4.0
2) Update FTM_EVAL_GUI to 6.4.0.

12/1/04 QPST 2.7.172
1) Disable model compatibility test for PBN file.
2) Update NPRG6550PB_16.hex to FLASHPRG_MSM6550.08.00.01.
3) Added support for MSM6275 multi-image download to Software Download
application.

11/12/04 QPST 2.7.167
1) Added support for progressive boot (PBN) files to Software Download.
2) USB ports occasionally send the disconnect/reconnect events in reverse
sequence during a mobile reset. This would cause QPST to lose the mobile when
it was reset. Added code to restart port if disconnect event handler discovers
port has already reconnected.
3) Remove hardware flow control / mobile detection menu for UART ports that
was introduced in 2.7.124.
4) Added NV items 1992-2506.
5) Add missing MSM6500 JIZRF models to NV backup.
6) Fix overwrite of write-only items NV_DS_MIP_SS_USER_PROF_I and
NV_DS_MIP_DMU_MN_AUTH_I in Service Programming when you do a read followed
by a write.

10/19/04 QPST 2.7.165
1) Added progressive boot support for MSM6550.
2) Fix bug in Automation interface. The phone enumeration stopped with
no phones listed if COM1 didn't have a phone attached.
3) Updated MSM6550 NANDPRG to FLASHPRG_NANDFLASH.08.00.00.
4) Fixed bug in Software Download automation that prevented second
download from succeeding.
5) Added DownloadPhoneAndBootImage method and NANDFlash property to
Automation interface.

9/29/04 QPST 2.7.162
1) Add MEID display to Service Programming status pane.
2) Move Require PW encryption from Sevice Programming IPv6 to the PPP tab.
Move IID field from the data tab to the IPv6 tab.  
Reordered IPv6 failover combo box items.
3) Renamed SURF6250-GWZRF6250 to FFA6250-GWZRF6250.
4) Updated MSM6700 ARMPRG.
5) Update dynamic features to version 2. Adds rel_d_neg_sci_supported.
6) Added QPSTAtmn Provisioning interface to allow scripts to get and set
nv items and roaming lists. Added sample VBScript and updated Automation
readme.
7) Added RLEditor support for new generic CDMA/HDR band classes 8-12 and
retitled some existing band classes to be clearer.
8) Update ARMPRGs to FLASHPRG_MSM6550.07.00.02.
9) Added RLEditor support for Concatenated PRL files. Added wizards for
splitting and joining, added autodetection on open, and added code to
perform validation and split/join operations. Also changed command line
processing to simply open a file if a path is the only command line param.
10) Added backup NV item NV_SMS_I.
11) Added NV items 1945-1991.
12) Software Download and Service Programming no longer attempt to read
write-only password NV items. The phone returns DIAG_BAD_PARM_F for these
items.
13) Updated FTM application to 6.3.0 and RF NV Item Manager to 1.3.1.

8/23/04 QPST 2.7.154
1) Before writing an EFS file test the target filesystem for free space. Previous
versions always test the root filesystem for free space. For this to work the mobile
must support reporting per-filesystem fress space.
2) Add NV items 1891-1944 to Software Download NV backup.
3) Correct conversion of IPv6 IID value when bit 31 == 1.
4) RL editor fix: conversion from text to binary for IS-683C or D did not properly
set the SSPR REV.
5) Software Download will now warn if you don't download a boot image along with
a phone image for NAND flash mobiles, or if you try to download a boot image to
a NOR flash mobile.
6) Added IPv6 provisioning to Service Programming.
7) Limit amount of data QPST port server will buffer while looking for an HDLC end
character. Previously if a user connected a non-phone to a COM port and
the device sent data to the port, QPST would buffer received data until it
exhausted virtual memory.
Set with key {HKLM or HKCU}\SOFTWARE\QUALCOMM\QPST\PARAMS\PORT_SERVER\read_limit_COMx
DWORD range [4096, MAX_DWORD], default 8192.
8) Optimize port server memory use for serial vs. USB and short message fragments.
9) Updated Automation interface: added Software Download interface, made bug fixes,
changed some script names, updated Automation readme file.

7/22/04 QPST 2.7.152
1) Updated Dynamic Features to version 1 (adds sync_id_supported, reconnect_msg_supported).
2) Added point-to-point SMS support to MSM6500 Service Programming.
3) Added preliminary MSM6700 support.
4) Add QPST Automation server and preliminary release of sample files.
enumerate.pl - enumerates active mobiles and shows their state.
offline.pl - sets a mobile offline.
reset.pl - resets a mobile.
spc.pl - unlocks a mobile by sending the Service Provisioning Code.
getinfo.vbs - similar to enumerate.pl.
sendcommand.vbs - sends an NV read command of MIN1 to the mobile.

6/28/04 QPST 2.7.147
1) Added preliminary Download and Service Programming support for MSM6550.
2) Updated MSM6550 armprgs to FLASHPRG_MSM6550.07.00.01.
3) Modify polling on USB port to skip baud rate changes. Baud rate changes
have no effect on USB, but do cause the mobile to reset log, debug message,
and event masks.
4) Modify receive loop to queue multiple receive buffers to the device driver.
5) Updated FTM application to 6.2.1.
6) Updated RF NV Manager application to 1.3.0.
7) Updated QPST User Guide & help files to revision F.
8) Display list of unused ports in Configuration Application Add New Port dialog.
List entry also describes port type (serial, USB diagnostic, USB data modem).
User can click on a row in the list control to fill in the port name and label
fields.
9) Add NAS and SMS-CB to MSM6500 Service Programming.

5/28/04 QPST 2.7.141
1) Added support for IPv6 NV items to Service Programming.
2) Updated COM port code to improve receive throughput.
3) Add model 198 to download as NAND.
4) Added NV items 1801-1891 to NV Backup.
5) Updated RF NV Item Manager to 1.2.2.
6) Updated FTM application to 6.1.2.
7) Modified NV Restore to work with read-only QCN files.

4/22/04 QPST 2.7.138
1) Add backup/restore of PDP Context files to Software Download.
2) Updated armprgs:
   aprg6100.hex, nprg6100.hex to FLASHPRG_MSM6100.06.05.00.
   aprg6250.hex, nprg6250.hex to FLASHPRG_MSM6250.06.05.00.
   aprg6500.hex, nprg6500.hex to FLASHPRG_MSM6500.06.05.00.
3) Add NV items 1312-1800.
4) QCNView rewritten, adding a tree control as the default data presentation. This
was a prerequisite to adding display of PDP Context file contents. The application
still supports the original text view.
5) Updated RF NV Item Manager to release 1.2.0. Minor changes, primarily removing
obsolete NV items.
6) Modified EFS Explorer to disable mobile sleep when it connects to a phone,
restore original sleep state when disconnecting. This should improve performance
of this application on mobiles that use long REX ticks when sleeping.
7) Code optimization to reduce QPST CPU usage when connected to a busy
mobile over a slow (RS-232) datalink.
8) Update FTM application to 6.1.1.
9) Updates to FTM and RFIM help files. Added QCNView help files.
Updated QPST User's Guide to rev D.
10) Add model 199.

1/14/04 QPST 2.7.132
1) Added FTM and RFIM help groups to installer.
2) Increased maximum image size to 64 meg to prevent the Gang Flash Image application
from crashing on large images.
3) Send close command to armprg on download abort.
4) Fixed a race condition that caused the download component to crash when
the download was aborted.
5) Software Download warning dialog about hex file / phone model number mismatch now
displays both model numbers.
6) Added support for DIAG_SUBSYS_CMD_VER_2_F (delayed response and status).
7) Updated APRG6100FFA.hex to support USB (FLASHPRG_MSM6100NORFFA.06.03.00).
8) Changed model 184 from 6250 SURF to 6100 FFA.

12/17/03 QPST 2.7.129
1) Add NV items 1196-1311.
2) Update FTM and RF NV Manager applications.
3) Add support to Service Programming for NV_PPP_CONFIG_DATA_I. This will show
up as the IP Config tab. Usernames, passwords, and DNS server addresses have also been
moved to this tab.
4) Service Programming, changed "Dynamic Features" tab to "IS-2000 Dynamic Features".
5) Deleted obsolete help files, updated QPST user guide and help, added NV item manager
and FTM help.
6) RF NV Item Manager, update the GSM Temp vs Comp NV items.

12/2/03 QPST 2.7.127
1) Added serial port hardware control line monitor. You can use this on
some mobiles in place of polling to detect the presence of a mobile.
Use the Configuration Application Ports tab, right click on the port and
select Port Control. You can configure the port to use standard polling,
use DSR or CD (RLSD) lines to detect a mobile, or use a combination of both.
NOT ALL MOBILES SUPPORT HARDWARE CONTROL LINES. Some have them hardwired
active, which will prevent QPST from detecting when the mobile resets.
Not applicable to USB ports.
2) Updated armprgs:
Incorporate new flash driver changes to fix bug in Samsung K9F1208 driver
aprg6100.hex, nprg6100.hex to FLASHPRG_MSM6100.06.03.00
aprg6500.hex, nprg6500.hex to FLASHPRG_MSM6500.06.03.00
APRG6250.HEX, NPRG6250.HEX to FLASHPRG_MSM6250.06.04.00 (USB enabled).
3) Modified SCRAMP and Software Download to use demand paged memory rather
than statically allocated memory. Set maximum image size to 64 meg.
4) Fix problem with misidentifying 3rd party serial port card as USB.
5) Modified QPST Configuration Start Client to set working directory to client
directory.
6) Change test for USB device driver name to case-insensitive for compatibility
with USB 2.x drivers.
7) Add write timeout when using a USB device. Otherwise, if phone connected
by USB cable but SIO set to UART, writes to phone never signal completion,
causing the write thread to block.
8) Insert delay after opening USB phone port. Sometimes don't see phone
responses and QPST shows no phone on port.
9) Preliminary support for WinCE bin format software download.
10) Updated FTM to FTM_EVAL_GUI_6.1.0.
11) Updated RF NV Item Manager to RF_NV_Manager_1.1.0.
12) PRL Editor: Added support for new roaming list system record format with
the title, "PRL Simplification for International Roaming". It allows a normal
1x record to substitute an MCC/IMSI_11_12 for the SID/NID fields in any
supported file format. Relaxed constraints on accepting previously existing
1x-MCC system records. Fixed bug where all fields except
SID/NID/NID_INCL/MCC/IMSI_11_12 for an existing 1x-MCC record were reset.

10/31/03 QPST 2.7.123
1) Added PRL support to MSM6200, MSM6250 Service Programming.
2) Disable mobile sleep when reading NV items in Service Programming.
3) Enabled Offline ESN feature in Software Download. Mobiles that
have R-UIM hardware do not always return the correct ESN to the status
command. This feature sets the mobile offline, then uses the value in
the ESN NV item as the seed for the NV backup file name. To enable the
feature set the Options... Settings... "Use offline mode ESN" checkbox.
4) Added the Display Capture application to QPST.
5) Replaced the RF Cal Editor application with the RF NV Item Manager
application.
6) Poll for download mode a second time if we receive a NAK the first
time. This helps situations where a poll for data mode causes the mobile
to NAK the next diag mode command.
7) Add NV items 1033-1195 to NV backup.
8) Add download support for MSM6100 NOR-flash FFA.
9) Add models 192-197.
10) Updated MSM6500 armprgs to FLASHPRG_MSM6500.06.01.00.
11) Updated PRL editor:
 - Changes to match latest IS-683D spec related to PLMN system field. Minor
 bug fixes.
 - Full support for IS-683D multi-LAC PLMN system records.
 - Fixed bug with new PLMN multi-LAC size calc, made user interface consistent
 with [new] documentation.

9/26/03 QPST 2.7.118
1) Added NV items 1019 - 1032.
2) Added dynamic feature menu item to more mobiles.
3) Modified DF dialog to allow (none) fwd/rev rates.
4) Changes to PRL Editor:
 -Properly handle the IS-683D SSPR_P_REV field in all cases and the QC header that
 is present in some non-RLEditor IS-683A and C files.
 -Changed previous SSPR_P_REV fix to apply to both C and D formats, and to automatically
 fix files that were saved with the wrong value. Open files in lowest applicable format
 rather than highest.
5) Change to DMProxyWin:
 -Disable QPST "auto server shutdown" feature during startup of DMProxyWin as the feature
 will cause problem when DMProxyWin needs to disconnect/reconnect to QPST server at high frequency.
6) Changes to BuildGangImage:
 -Set "Include ECC Data" checked by default.
 -Don't require boot and phone image file names if just building EFS contents.
7) Increased SCRAMP image size from 8192K to 12288K, released as version 1.91.
8) Changes to BuildGangImage - factory image dump preparation added.
9) Increased Software Download image size from 8192K to 12288K.
10) Enabled boot loader download in Software Download application.
11) Updated ARMPRGS:

aprg6100.hex, nprg6100.hex to version 06.00.00

Support for new Streaming Download Protocol.
Support for boot loader download to NAND flash.
Uses NAND device drivers from DMSS EFS2.
Supports new AMD AM29BDS128H 16MB Flash.

==================================================================

aprg6250.hex, nprg6250.hex to version 06.00.00

Support for new Streaming Download Protocol.
Support for boot loader download to NAND flash.
USB support added but temporarily compiled out
        waiting for USB support in DMSS.
Completely new NOR flash programming layer.
Supports new AMD AM29BDS128H 16MB Flash.
Uses NAND device drivers from DMSS EFS2.

==================================================================

aprg6500.hex, nprg6500.hex to version 06.00.00

Support for new Streaming Download Protocol
Support for boot loader download to NAND flash.
USB support added but temporarily compiled out
        waiting for USB support in DMSS.
Completely new NOR flash programming layer.
Supports new AMD AM29BDS128H 16MB Flash.
Uses NAND device drivers from DMSS EFS2.

12) Distributing version 6.0.1 of FTM application.


8/25/03 QPST 2.7.114
1) Added UMTS SMS-CB support.
2) Insure delay if mobile returns a zero-length response.
3) Removed references to warmprg.hex and aprg6200_260.hex from Software Download.
4) Logs port bytes to debug file with trace level 2.
5) Added NV items 934-1018.
6) Change NV_SMS_BC_SRV_LABEL_SIZE from 10 to 30.
7) Updated aprg6200 to 04.50.00. This supports writing both MSM6200 flash devices.
   You must use SCRAMP 1.90 (included in this distribution) to create dual flash hex files.
8) PRL editor: Fixed bug with IS-856 system records where the subnet id field was written to the
   file incorrectly. Fixed another bug with HDR subnetid parsing. Split PLMN field into MNC and MCC
   fields. Added special parsing, reading, writing and validation for the new fields. Fixed some
   minor problems with unprinting generic acq records.
9) Software Download: Turn off sleep before doing an NV backup, then restore settings when done.
10) If polling loop detects a WCDMA mobile, use longer timeouts.
11) Log thread shutdown data with timestamps.
12) Use full date/time format in server debug file.
13) Use registry entries to set polling thread parameters, otherwise use defaults.
    Looks in two places:
    first - HKEY_LOCAL_MACHINE\SOFTWARE\Qualcomm\QPST\params\port_server
    finally - HKEY_CURRENT_USER\Software\Qualcomm\QPST\params\port_server
    Looks for DWORDs in this range (all times in mS):
    polling_timer_interval_ms [600, 2000]
    polling_max_tries [3, 10]
    polling_timeout_ms [400, 3000]
14) Modify Scramp to support one or two flash devices (1.90).
15) Modify Software Download to support one or two flash devices.
16) Modified M.IP to use 3-state checkboxs that render the undefine state as a
    gray square instead of a disabled checkmark.

7/15/03 QPST 2.7.108
1) Updated aprg6100.hex to 05.08.00.
2) BuildGangImage: Includes modifiaction to allow either only Factory Image
   or EFS2 Data file to be created. Fixed bug related to file creation date.
3) PRL Editor: Fixed minor validation bugs and cleaned up print/unprint of system records.

7/11/03 QPST 2.7.107
1) Changes to RL Editor:
   Added support for new "undefined" acq and sys types. Deleted defunct nonstandard (pre-A) format
   files (had already removed them from the project).
   Fixed bug in size calculation for type-specific part of new special system record.
   Rearranged system table to put all shared columns first and to minimize type-specific columns.
   Added support for dynamically updating column titles, so titles correspond to the currently
   selected row.
2) Corrected BuildGangImage output file name validation.
3) Added MSM6025 models.
4) Fixed Dynamic Feature bit alignment problems with NV_DF_I item write.
5) Added MSM6250 support to Software Download and Service Programming for new model numbers.
6) Corrected MIP HA interpretation for MSM5500.
7) Update BuildGangImage to provide radio button options describing which files to produce.
8) Updated MSM6250 APRG and NPRG to 05.01.00.
9) Added support for Dynamic Features.
10) Based armprg nand/nor protocol decision on mobile model number, not "nprg" file name prefix.
11) Updated aprg6500 and added NPRG6500 to 05.01.00.

6/26/03 QPST 2.7.104
1) Added support to Service Programmign for NV_PKT_DIAL_STRINGS_I
2) Add file drag support to EFS Explorer.
3) Added three missing MSM6500 model numbers to service prog agent.
4) Code changes for dynamic features, Phone... menu disabled for now.
5) Modified BuildGangImage to always produce both output files.
6) Updated APRG6500.hex to 05.01.00.
7) Packet dial string, limit character set to 0-9, *, #. Limit length to 15 characters.
8) Remove UMTS Data tab (mobile now uses a configuration file), move user/password from Security
   to Data.
9) Added support for NV items 924-932.
10) Added BuildGangImage application to installer.

6/12/03 QPST 2.7.100
1) Missing GSM preferred mode, DCS, E-GSM, P-GSM bands from Leopard.
2) Added new models to SD 2.0 and HDR determination code tables.
3) Added support for models 147-181: 
   -Full support for new MSM6000 models, 
   -Download support for MSM6250, MSM6500.
4) Updated aprg6200.hex to 04.16.00.
5) Bug fixes to PRL editor.
6) Updated aprg6100.hex and nprg6100.hex to 05.07.00.
7) Updated PRL editor to support IS-683D.
8) Changed directory name comparison used in EFS Explorer directory create to case sensitive.
9) Implemented file history lists in Software Download for image, backup, and restore file names.
   The controls also accept dragged files now.
10) Fixed Software Download file name problem that would occur if you double-clicked a filename that
    contained a space. Only the last part of the filename ended up in the edit control.
11) Added NV items 919-923.
12) Removed extra trailing blanks from some NV item names in the list used by QCNView.
13) Increased timeout to handle slow file deletion with full EFS2 file system.
14) Added IS-683B to PRL editor, and restructured project.
15) Updated armprgs:
    armprg.hex : 03.15.00
    aprg6000.hex : 04.12.00
    aprg6050.hex : 04.16.00
    aprg6100.hex & nprg6100.hex : 05.06.00
    aprg6200.hex (replaces aprg6200_192.hex) : 04.15.00
16) Modified EFS2 packet sizes for increased efficiency.
17) Service Programming will now display a dialog listing any NV items that failed to write.
18) Phonebook component no longer returns an error if NV returns a read-only status to a write.
19) For MSM6300, after NV write completes Service Programming app scans NV error list and
    modifies phonebook and security display to flag any un-written entries with a red w-slash
    state icon.
20) Command line version of RLEditor unprint:
    RLEditor.exe -u sourcefile.txt destfile.rl
    to unprint sourcefile.txt and store the result in destfile.rl.
21) Added NV items 911-917.
22) Updated aprg6100.hex and nprg6100.hex to 05.05.00.
23) Remove "GSM on 1x" option from RTRE combo box.
24) Updated aprg6000.hex to 04.11.00.

3/19/03 QPST 2.7.91
IF YOU USE NAND FLASH YOU MUST UPGRADE THE SURF/FFA BOOT CODE BEFORE ATTEMPTING TO
USE THIS VERSION OF QPST.

1) Added support for 32-bit DMSS DLOAD command. QPST will choose to use the 32-bit write
   command when it detects protocol version 5 or higher.
2) Added support for sending blocks to NANDPRG in ascending order. QPST will use this order
   when the parameter request feature field indicates NANDPRG supports NAND_DL.
3) Updated NANDPRG to 05.04.00.
   -Support for new spanless boot loader method.
   -This NPRG6100.HEX must not be used with old boot loaders.
4) EFS Explorer can now display a progress bar during file transfer.
   Use "View... File Xfer Animation" to enable/disable the old file
   transfer animation, and "View... File Xfer Progress Bar" to enable/disable
   the new progress bar. You can enable either, both, or neither. By default
   you will get both.
5) The roaming list editor can now read an input file and generate a PRL.
6) Debug logging modifications:
   -Perform logging in separate thread so disk latency doesn't slow QPST server.
   -Log sync and async response times from mobile.

3/3/03 QPST 2.7.89
1) EFS Explorer modified for EFS 2.0 compatibility.
2) EFS Explorer modified to perform file transfers in a separate thread, to avoid
   "Server Busy" warning.
3) Updated nprg6100.hex to 00.01.03, has fix for flash devices with
   bad blocks.
4) Modified Service Programming Mobile IP to use reserved values for
   dynamic and unset based on mobile model.

2/11/03 QPST 2.7.87
1) Added NV item 910.
2) Modified Service Programming Security to write PPP user/password.
3) Updated armprg.hex to 03.14.00 for MSM5100/1505.
4) Added NV items 907-909.
5) Added model numbers 142-146.
6) Updated model names for models 120-123.
7) Updated model names for models 118, 119.
8) Retry EFS file space queries.
9) Fix DMProxyWin scroll.
10) Make DMProxyWin settings persistant.
11) In QPST Server, send the DIAG_RPC_F command but don't wait for a mobile reply.
    The caller must implement acknowledgement testing. Only affects Send() not
    SendSync(). Also treat DIAG_RPC_F like a streaming response (like logs, events,
    etc).
12) Changed NV Backup and Restore: if phone ESN changes, application updates NV
    file name with new ESN. When Backup or Restore tab first selected, applicaion
    sets NV file name based on ESN. If tab changed while phone unavailable, file
    name will update when phone becomes available, even if ESN hasn't changed.
    Note that an ESN of all 0's is still a special case - version numbers not
    incremented for this ESN.
13) Added support for NV items 903-905.
14) Service Programming: always enable SD 2.0 for MSM6000 and MSM6050.
15) Service Programming: always disable SD 2.0 HDR mode for MSM6000 and MSM6050.
16) Updated to armprg 3.2 for byte stuffing.
17) Various changes to support EFS 2.0 through the EFS Explorer.
18) Updated EFS COM component for EFS2 diag protocol support.
19) Updated installer and project to distribute DMProxyWin application.

Copyright (c) 2000-2008, QUALCOMM Incorporated
All rights reserved.