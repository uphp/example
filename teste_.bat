@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../uphp/commands/uphp
php "%BIN_TARGET%" %*
