# Vms

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **string** | Time at which the status was recorded (UTC). | [optional] 
**status** | **string** | Status of the VM. Valid values are &lt;code&gt;UP&lt;/code&gt;, &lt;code&gt;DOWN&lt;/code&gt;, or &lt;code&gt;ERROR&lt;/code&gt; (indicating a system error was encountered during health check). | [optional] 
**servers** | [**\Swagger\Client\Model\Servers[]**](Servers.md) | The health details of MySQL server(s) running on a VM. | [optional] 
**sub_status** | **string** | Sub-status of the VM. | [optional] 
**host_name** | **string** | Name of the host. | [optional] 
**label** | **string** | Labels of the VM. For example, &lt;code&gt;mysql&lt;/code&gt;, &lt;code&gt;MYSQL_SERVER&lt;/code&gt;. | [optional] 
**vm_id** | **int** | ID of the VM. | [optional] 
**health_data** | [**\Swagger\Client\Model\VmsHealthData**](VmsHealthData.md) |  | [optional] 
**status_message** | **string** | Status message, such as &lt;code&gt;VM running&lt;/code&gt;. | [optional] 
**compute_status** | **int** | Status of the compute node. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


