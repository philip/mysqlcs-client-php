# BackupRestorationPostRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**restore_type** | **string** | The type of restore to perform; currently, only &lt;code&gt;pit&lt;/code&gt; (point-in-time) can be specified here. | [optional] 
**restore_id** | **string** | For PIT restore, specify point-in-time here. PIT must of the format &lt;code&gt;mm/dd/yyyy HH:mm:ss&lt;/code&gt;. For example, &lt;code&gt;03/12/2016 17:20:55&lt;/code&gt;. | [optional] 
**backup_id** | **string** | ID of the backup to be restored. This is the only required field if perform restoring by backup ID. | [optional] 
**notes** | **string** | Free-form text to provide additional information about the restoration operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


