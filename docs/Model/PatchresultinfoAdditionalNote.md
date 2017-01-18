# PatchresultinfoAdditionalNote

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**patching_id** | **int** | ID of the applied patch operation. | [optional] 
**backup_id** | **string** | Backup ID. You can use the backup ID to manage the backup. | [optional] 
**version_before_this_patch** | **string** | Version of the component before the patch was applied. | [optional] 
**strategy** | **string** | Patching strategy. For example, &lt;code&gt;Rolling&lt;/code&gt;. To minimize service disruption, the patch is applied in a rolling pattern, patching a single node at a time. | [optional] 
**meta_version_before_this_patch** | **string** | Version of the metadata service manager before the patch was applied. | [optional] 
**custom_rollback_id** | **string** | ID to be used in a rollback operation. | [optional] 
**start_date** | **string** | Date and time that the patch operation started. | [optional] 
**end_date** | **string** | Date the patch operation ended. | [optional] 
**patching_status** | **string** | Status of the patching operation. For example, &lt;code&gt;COMPLETED&lt;/code&gt;. &lt;code&gt;COMPLETED_ROLLBACK&lt;/code&gt; is displayed when an applied patch has been rolled back. | [optional] 
**result_message** | **string** | System message that describes the patching operation. | [optional] 
**additional_note** | **string** | Free-form text to provide additional information about the patch. | [optional] 
**applied_by** | **string** | Name of the user that applied the patch. &lt;code&gt;system&lt;/code&gt; displays if the patch was applied by an auto-update scheduled job. | [optional] 
**job_id** | **string** | Job ID for the patch operation. | [optional] 
**complete_log** | **string** | System messages that track the patch operations. | [optional] 
**progress_messages** | **string[]** | List of progress messages for the patch. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


