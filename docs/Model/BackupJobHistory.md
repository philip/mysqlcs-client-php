# BackupJobHistory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation** | **string** | Type of operation that was executed. For example, &lt;code&gt;backup&lt;/code&gt;, &lt;code&gt;delete&lt;/code&gt;, &lt;code&gt;upload&lt;/code&gt;, &lt;code&gt;download&lt;/code&gt;, and so on. | [optional] 
**job_id** | **string** | Job ID for the backup. | [optional] 
**status** | **string** | Status of the backup. Valid values include: &lt;code&gt;Completed&lt;/code&gt;, &lt;code&gt;Failed&lt;/code&gt;, &lt;code&gt;Deleted&lt;/code&gt;, &lt;code&gt;Backup In Progress&lt;/code&gt;, &lt;code&gt;Upload In Progress&lt;/code&gt;, &lt;code&gt;Download In Progress&lt;/code&gt;, &lt;code&gt;Restore In Progress&lt;/code&gt;, or &lt;code&gt;Delete In Progress&lt;/code&gt;. | [optional] 
**start_date** | **string** | Date and time the operation started. | [optional] 
**complete_date** | **string** | Date and time that the operation completed. | [optional] 
**status_details** | **string** | History of system messages. Each message is separated by an ellipses &lt;code&gt;{...}&lt;/code&gt;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


