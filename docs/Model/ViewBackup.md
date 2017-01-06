# ViewBackup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backup_id** | **string** | Backup ID. You can use the backup ID to manage the specific backup (for example, download). | [optional] 
**job_id** | **string** | Job ID for the backup. | [optional] 
**backup_start_date** | **string** | Date and time that the backup started. | [optional] 
**backup_complete_date** | **string** | Date and time that the backup completed. | [optional] 
**expiration_date** | **string** | Date and time that the backup will be deleted automatically from storage. If specify &lt;code&gt;keepForever&lt;/code&gt; in backup request, the backup is retained indefinitely or until manually deleted. | [optional] 
**deleted_on_date** | **string** | Date and time that the backup deletion completed. | [optional] 
**initiated_by** | **string** | User account that initiated this operation. If the operation is a scheduled automated backup, the value is &lt;code&gt;scheduled&lt;/code&gt;. | [optional] 
**full** | **bool** | Flag that specifies whether this is a full (&lt;code&gt;true&lt;/code&gt;) or incremental (&lt;code&gt;false&lt;/code&gt;) backup. A full backup contains all the data files required to restore the service instance databases. An incremental backup contains only changes to the databases since the last scheduled full backup. | [optional] 
**local** | **bool** | Flag that specifies whether the backup is to be downloaded and stored locally (&lt;code&gt;true&lt;/code&gt;), or archived and stored remotely on the Oracle Storage Cloud Service container (&lt;code&gt;false&lt;/code&gt;). | [optional] 
**local_copy** | **bool** | Flag that specifies whether the local copy of a backup is maintained for a backup that has been uploaded to the Oracle Storage Cloud Service. | [optional] 
**database_included** | **bool** | This should always &lt;code&gt;false&lt;/code&gt; for Oracle MySQL Cloud Service. | [optional] 
**size** | **string** | Size of the backup, in MBs. For example: &lt;code&gt;1011.4MB&lt;/code&gt; (backup complete) or &lt;code&gt;Unknown&lt;/code&gt; (backup in-progress). | [optional] 
**size_in_bytes** | **int** | Size of the backup, in Bytes. | [optional] 
**status** | **string** | Status of the backup. Valid values include: &lt;code&gt;Completed&lt;/code&gt;, &lt;code&gt;Failed&lt;/code&gt;, &lt;code&gt;Deleted&lt;/code&gt;, &lt;code&gt;Backup In Progress&lt;/code&gt;, &lt;code&gt;Upload In Progress&lt;/code&gt;, &lt;code&gt;Download In Progress&lt;/code&gt;, &lt;code&gt;Restore In Progress&lt;/code&gt;, or &lt;code&gt;Delete In Progress&lt;/code&gt;. | [optional] 
**href** | **string** | URI of the backup resource. | [optional] 
**job_history** | [**\Swagger\Client\Model\JobHistory[]**](JobHistory.md) | Groups job history details. The job history details only return for a specific backup request. | [optional] 
**full_backup** | **string** | Full backup linked to the incremental backup. | [optional] 
**incremental_backups** | **string[]** | List of incremental backups linked to the full backup. | [optional] 
**notes** | **string** | Free-form text that provides additional information about the backup. | [optional] 
**tag** | [**\Swagger\Client\Model\ViewBackupTag**](ViewBackupTag.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


