# ViewServiceComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | ID of the Oracle MySQL Cloud Service instance. | [optional] 
**component_id** | **string** | ID of the service component. | [optional] 
**state** | **string** | The current state of the component. | [optional] 
**version** | **string** | The version of the component. For example, &lt;code&gt;5.7&lt;/code&gt;. | [optional] 
**creation_date** | **string** | The date and time when the service instance was created. | [optional] 
**instance_name** | **string** | The component name of the service instance. For example, &lt;code&gt;mysql&lt;/code&gt;. | [optional] 
**instance_role** | **string** | The role of the service instance. It is &lt;code&gt;None&lt;/code&gt; for Oracle MySQL Cloud Service. | [optional] 
**attributes** | [**\Swagger\Client\Model\ServiceAttribute[]**](ServiceAttribute.md) | Array of service component attributes, such as compute shape, connect string, etc. | [optional] 
**vm_instances** | [**\Swagger\Client\Model\ViewVmInstanceNodesArrayItem[]**](ViewVmInstanceNodesArrayItem.md) | VM instances Array Item. | [optional] 
**admin_host_name** | **string** | The host name of the administration node. It is usually the instance itself. | [optional] 
**storage_volumes** | [**\Swagger\Client\Model\ViewStorageVolume[]**](ViewStorageVolume.md) | All storage volumes of the service instance. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


