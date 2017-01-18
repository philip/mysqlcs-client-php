# BackupRestoreHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backup_id** | **string** | Backup ID. | [optional] 
**backup_date** | **string** | Date and time of the backup. | [optional] 
**restore_type** | **string** | The extended restore type; currently, only &lt;code&gt;pit&lt;/code&gt; (point-in-time) is supported. | [optional] 
**restore_id** | **string** | For PIT restore, point-in-time is displayed in the format &lt;code&gt;mm/dd/yyyy HH:mm:ss&lt;/code&gt;. For example, &lt;code&gt;03/12/2016 17:20:55&lt;/code&gt;. | [optional] 
**job_id** | **string** | Job ID for the restore operation. | [optional] 
**recovery_start_date** | **string** | Date and time that the restoration operation started. | [optional] 
**recovery_complete_date** | **string** | Date and time that the restoration operation completed. This information is not displayed for restorations that are still in progress. | [optional] 
**status** | **string** | Status of the operation. Valid values include: &lt;code&gt;Completed&lt;/code&gt;, &lt;code&gt;Failed&lt;/code&gt;, or &lt;code&gt;Restore In Progress&lt;/code&gt;. | [optional] 
**status_details** | **string** | History of system messages. | [optional] 
**notes** | **string** | Free-form text that provides additional information about the restoration operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


