<?php /*

[HandlerSettings]

ExtensionRepositories[]=eztika/classes/datatypes/ezbinaryfile

MetaDataExtractor[application/pdf]=ezmulti
MetaDataExtractor[application/msword]=ezmulti
MetaDataExtractor[application/vnd.ms-excel]=ezmulti
MetaDataExtractor[application/vnd.ms-powerpoint]=ezmulti
MetaDataExtractor[application/vnd.visio]=ezmulti
MetaDataExtractor[application/vnd.ms-outlook]=ezmulti
MetaDataExtractor[application/xml]=ezmulti
MetaDataExtractor[application/rtf]=ezmulti
MetaDataExtractor[application/vnd.oasis.opendocument.text]=ezmulti
MetaDataExtractor[application/vnd.oasis.opendocument.presentation]=ezmulti
MetaDataExtractor[application/vnd.oasis.opendocument.spreadsheet]=ezmulti
MetaDataExtractor[application/vnd.oasis.opendocument.formula]=ezmulti
MetaDataExtractor[application/zip]=ezmulti
#Office 2007 word file, but not yet supported in eZP4.0,eZP4.1
MetaDataExtractor[application/vnd.openxmlformats-officedocument.wordprocessingml.document]=ezmulti
#octet-stream is the default, and in eZP4.O Office 2007 files are assigned this mime type
#If tika senses a known format like the Office 2007 types, it will treat them well
MetaDataExtractor[application/octet-stream]=ezmulti
[MultiHandlerSettings]

#Change the path to the eztika shell script, which probably needs editing as well
TextExtractionTool=/opt/local/bin/eztika

 */
?>