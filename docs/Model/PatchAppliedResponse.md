# PatchAppliedResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backup_status** | **string** | Whether a backup of the software was created before the patch was applied. Valid values include: &lt;code&gt;Available&lt;/code&gt;, &lt;code&gt;SameVersion&lt;/code&gt;, &lt;code&gt;Unavailable&lt;/code&gt;, &lt;code&gt;Unknown&lt;/code&gt;. | [optional] 
**additional_note** | **string** | Free-form text to provide additional information about the patch. | [optional] 
**applied_by** | **string** | Name of the user that applied the patch. &lt;code&gt;system&lt;/code&gt; displays if the patch was applied by an auto-update scheduled job. | [optional] 
**applied_date** | **string** | Date and time that the patch was applied. | [optional] 
**total_time** | **string** | Duration of the patch operation. | [optional] 
**patch_id** | **string** | Patch ID. | [optional] 
**patch_description** | **string** | Description of the patch. | [optional] 
**patch_release_url** | **string** | URL that provides more information about the patch. | [optional] 
**release_date** | **string** | Date and time patch was released. | [optional] 
**result_message** | **string** | Patch results message. | [optional] 
**last_status** | **string** | Status of the patch operation. For example: &lt;code&gt;IN PROGRESS&lt;/code&gt;, &lt;code&gt;COMPLETED&lt;/code&gt;, and &lt;code&gt;FAILED&lt;/code&gt;. &lt;code&gt;COMPLETED_ROLLBACK&lt;/code&gt; is displayed when an applied patch has been rolled back. | [optional] 
**last_status_message** | **string** | Last message logged for the patch operation. | [optional] 
**component_patches** | [**\Swagger\Client\Model\PatchComponentDetailsInfo[]**](PatchComponentDetailsInfo.md) | Group the details of each patches in the component. | [optional] 
**patch_components** | [**\Swagger\Client\Model\PatchComponentAppliedInfo[]**](PatchComponentAppliedInfo.md) | Group the details of the patch to be applied. | [optional] 
**patch_type** | **string** | Patch type classification. For example, &lt;code&gt;Quarterly&lt;/Code&gt;, &lt;code&gt;Security&lt;/Code&gt;. | [optional] 
**patch_category** | **string** | Category of the patch. For example: &lt;code&gt;General&lt;/code&gt;, &lt;code&gt;Multiple&lt;/code&gt;, &lt;code&gt;Security&lt;/code&gt;, and so on. | [optional] 
**patch_severity** | **string** | Severity of the patch. For example &lt;code&gt;Normal&lt;/code&gt;, &lt;code&gt;Mandatory&lt;/code&gt;, &lt;code&gt;Recommended&lt;/code&gt;, and so on. | [optional] 
**job_id** | **string** | Job ID for the patch operation. | [optional] 
**display_name** | **string** | Display name of the patch. | [optional] 
**to_version** | **string** | Version of Oracle MySQL Cloud Service instance that was patched. | [optional] 
**backup_id** | **string** | Backup ID. You can use the backup ID to manage the backup. | [optional] 
**in_progress** | **bool** | Flag that specifies whether the patch is still in progress. | [optional] 
**operation_type** | **string** | Patch operating being performed. Valid values include: &lt;code&gt;Rollback&lt;/code&gt;, &lt;code&gt;Patching&lt;/code&gt;, and &lt;code&gt;None&lt;/code&gt;. | [optional] 
**id** | **int** | Unique ID of the patching operation. Use this ID to get details of a patching operation. | [optional] 
**patching_result** | [**\Swagger\Client\Model\PatchResultInfo**](PatchResultInfo.md) |  | [optional] 
**rollback_result** | [**\Swagger\Client\Model\PatchRollbackResult**](PatchRollbackResult.md) |  | [optional] 
**rollback_id** | **string** | ID of the rollback that is associated to the completed patching operation. The ID is used to rollback a patch operation. | [optional] 
**rollback_version** | **string** | Version to which the patched component will be rolled back. | [optional] 
**current_patch_level** | **string** | Current patch level for the component. | [optional] 
**progress_messages** | **string[]** | List of progress messages for the patch. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


