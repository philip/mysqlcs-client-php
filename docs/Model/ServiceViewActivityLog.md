# ServiceViewActivityLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_log_id** | **string** | The log ID of the operation. | [optional] 
**service_name** | **string** | The name of the instance. | [optional] 
**service_type** | **string** | The service type of the instance. | [optional] 
**identity_domain** | **string** | The identity domain hosting the instance. | [optional] 
**service_id** | **string** | The corresponding ID of the MySQL Cloud Service instance. | [optional] 
**job_id** | **string** | The ID of the current job. | [optional] 
**start_date** | **string** | The date and time when the job started. | [optional] 
**end_date** | **string** | The date and time when the job ended. | [optional] 
**status** | **string** | &lt;p&gt;Current status of the job; one of: &lt;code&gt;In Progress&lt;/code&gt;, &lt;code&gt;Succeeded&lt;/code&gt;, &lt;code&gt;Failed&lt;/code&gt;.&lt;/p&gt; | [optional] 
**operation_id** | **string** | The corresponding ID of the operation. | [optional] 
**operation_type** | **string** | The type of the operation, such as &lt;code&gt;CREATE_SERVICE&lt;/code&gt;. | [optional] 
**summary_message** | **string** | The summary of the activity log. | [optional] 
**auth_domain** | **string** | Identity domain for the Oracle MySQL Cloud Service account. | [optional] 
**auth_user** | **string** | The authentication user. | [optional] 
**initiated_by** | **string** | The user making the request. | [optional] 
**messages** | [**\Swagger\Client\Model\ServiceMessageItem[]**](ServiceMessageItem.md) | Log details of the operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


