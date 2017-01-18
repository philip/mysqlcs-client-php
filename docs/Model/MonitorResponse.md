# MonitorResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **string** | Time at which the status was recorded (UTC). | [optional] 
**service_id** | **int** | ID of the Oracle MySQL Cloud Service instance. | [optional] 
**status** | **string** | Status of the instance. Valid values are &lt;code&gt;UP&lt;/code&gt;, &lt;code&gt;DOWN&lt;/code&gt;, or &lt;code&gt;ERROR&lt;/code&gt; (indicating a system error was encountered during health check). | [optional] 
**domain_name** | **string** | Identity domain ID for the Oracle MySQL Cloud Service account. | [optional] 
**components** | [**\Swagger\Client\Model\MonitorComponentsResponse[]**](MonitorComponentsResponse.md) | Groups the health details for Oracle MySQL Cloud Service components. | [optional] 
**service_type** | **string** | Type of the Oracle MySQL Cloud Service instance. | [optional] 
**status_message** | **string** | Status of the Oracle MySQL Cloud Service instance. For example, &lt;code&gt;Running&lt;/code&gt;. | [optional] 
**service_name** | **string** | Name of the Oracle MySQL Cloud Service instance. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


