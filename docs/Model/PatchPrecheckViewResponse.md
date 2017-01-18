# PatchPrecheckViewResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the operation. | [optional] 
**job_id** | **string** | Job ID for the patching precheck operation. | [optional] 
**patch_id** | **string** | Patch ID. | [optional] 
**start_date** | **string** | Date and time that the patching precheck operation started. | [optional] 
**end_date** | **string** | Date and time that the patching precheck operation stopped. | [optional] 
**performed_by** | **string** | Name of the user account used to perform the patch precheck. | [optional] 
**in_progress** | **bool** | Flag that specifies whether the patch precheck is still in progress. | [optional] 
**status** | **string** | Status of the patching precheck operation. Valid values include: &lt;ul&gt;&lt;li&gt;&lt;code&gt;PASSED_PRECHECK&lt;/code&gt; - Patching precheck passed.&lt;/li&gt;&lt;li&gt;&lt;code&gt;DIDNT_PASS_PRECHECK&lt;/code&gt; - Patching precheck did not pass. Check the &lt;code&gt;preCheckMessages&lt;/code&gt; attribute for more information.&lt;/li&gt;&lt;li&gt;&lt;code&gt;DIDNT_FINISHED_PRECHECK&lt;/code&gt; - An internal error was encountered and the patching precheck could not be performed. | [optional] 
**href** | **string** | URL for checking the status of the patching precheck job. This attribute displays only when viewing all patching precheck operations. | [optional] 
**pre_check_messages** | **string[]** | List of patching precheck messages. No patching precheck messages are returned when the precheck completes successfully. | [optional] 
**result_message** | **string** | System messages. This attribute displays only when viewing the status of one patching precheck operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


