<?
  Global $FS_CharSet;
  $FS_CharSet='cp1251';
  
  Function FS_EnCode($S)
  {
    Global $FS_CharSet;
    if($FS_CharSet!=='' && Is_String($S))
      return IConv('UTF-8', $FS_CharSet, $S);
    return $S;
  }
  
  Function FS_DeCode($S)
  {
    Global $FS_CharSet;
    if($FS_CharSet!=='' && Is_String($S))
      return IConv($FS_CharSet, 'UTF-8', $S);
    return $S;
  }
  
  Function FS_OpenDir($Dir) { return OpenDir(FS_EnCode($Dir)); }
  Function FS_ReadDir($h) { return FS_DeCode(ReadDir($h)); }
  Function FS_CloseDir($h) { return CloseDir($h); }
  Function FS_Is_Dir($Dir) { return Is_Dir(FS_EnCode($Dir)); }
  Function FS_Is_File($Dir) { return Is_File(FS_EnCode($Dir)); }
  Function FS_File_Exists($Dir) { return File_Exists(FS_EnCode($Dir)); }
  Function FS_RmDir($Dir) { return RmDir(FS_EnCode($Dir)); }
  Function FS_UnLink($File) { return UnLink(FS_EnCode($File)); }
  Function FS_MkDir($Dir, $Attr) { return MkDir(FS_EnCode($Dir), $Attr); }

  Function FS_File_Get_Contents($File) { return File_Get_Contents(FS_EnCode($File)); }
  Function FS_File_Put_Contents($File, $Data) { return File_Put_Contents(FS_EnCode($File), $Data); }
  
  Function FS_FileSize  ($File) { Return FileSize  (FS_EnCode($File)); }
  Function FS_FileMTime ($File) { Return FileMTime (FS_EnCode($File)); }
  Function FS_MD5_File  ($File) { Return MD5_File  (FS_EnCode($File)); }
?>