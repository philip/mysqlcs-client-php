# ViewBackupTag

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | **string** | Date and time (as epoch) that the backup started. | [optional] 
**end_time** | **string** | Date and time (as epoch) that the backup completed. | [optional] 
**start_lsn** | **string** | The beginning LSN of the backup. | [optional] 
**end_lsn** | **string** | The last LSN of the backup. | [optional] 
**last_bin_log** | **string** | The name of the last binlog file. | [optional] 
**last_bin_log_pos** | **string** | The last binlog position. | [optional] 
**triggered_by** | **string** | The user account that initiated this operation. If the operation is a scheduled automated backup, the value is &lt;code&gt;scheduled&lt;/code&gt;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


