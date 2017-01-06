# Servers

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **string** | Time at which the status was recorded (UTC). | [optional] 
**status** | **string** | Status of the VM. Valid values are &lt;code&gt;UP&lt;/code&gt;, &lt;code&gt;DOWN&lt;/code&gt;, or &lt;code&gt;ERROR&lt;/code&gt; (indicating a system error was encountered during health check). | [optional] 
**server_id** | **int** | ID of the MySQL Server. | [optional] 
**server_name** | **string** | Name of the MySQL Server. | [optional] 
**health_data** | [**\Swagger\Client\Model\ServersHealthData**](ServersHealthData.md) |  | [optional] 
**status_message** | **string** |  | [optional] 
**server_type** | **string** | &lt;code&gt;MASTER&lt;/code&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


