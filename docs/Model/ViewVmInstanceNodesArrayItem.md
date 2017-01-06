# ViewVmInstanceNodesArrayItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vm_id** | **string** | The ID of the compute node. | [optional] 
**hostname** | **string** | The host name of the compute node. | [optional] 
**label** | **string** | The label of the compute node. | [optional] 
**ip_address** | **string** | The IP address of the compute node. | [optional] 
**public_ip_address** | **string** | The IP address of the compute node. | [optional] 
**usage_type** | **string** | The usage type of the compute node. It is usually &lt;code&gt;MYSQL_SERVER&lt;/code&gt; for Oracle MySQL Cloud Service. | [optional] 
**role** | **string** | The role of the compute node. It is usually &lt;code&gt;MYSQL_SERVER&lt;/code&gt; for Oracle MySQL Cloud Service. | [optional] 
**component_type** | **string** | The type of the component. It is usually &lt;code&gt;mysql&lt;/code&gt; for Oracle MySQL Cloud Service. | [optional] 
**state** | **string** | The current state of the compute node. Valid values are: &lt;ul&gt;&lt;li&gt;&lt;code&gt;Ready&lt;/code&gt;: Fully operational&lt;/li&gt;&lt;li&gt;&lt;code&gt;Starting&lt;/code&gt;: Being created or initialized&lt;/li&gt;&lt;li&gt;&lt;code&gt;Stopping&lt;/code&gt;: Being stopped&lt;/li&gt;&lt;li&gt;&lt;code&gt;Error&lt;/code&gt;: Has some error condition(s)&lt;/li&gt;&lt;/uL&gt; | [optional] 
**shape_id** | **string** | The Oracle Compute Cloud shape of the compute node. | [optional] 
**total_storage** | **int** | The size in GB of the total storage allocated to the compute node, including data volume, backup volume, and MySQL log volume. | [optional] 
**creation_date** | **string** | The date and time when the service instance was created. | [optional] 
**is_admin_node** | **bool** | Indicates whether the compute node is an administration node. | [optional] 
**servers** | [**\Swagger\Client\Model\ViewVmInstanceServer[]**](ViewVmInstanceServer.md) | Servers Array Item. | [optional] 
**storage_volumes** | [**\Swagger\Client\Model\ViewStorageVolume[]**](ViewStorageVolume.md) | All storage volumes of the service instance. | [optional] 
**vm_state_display_name** | **string** | The display name of the current state of the compute node. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


