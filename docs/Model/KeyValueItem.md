# KeyValueItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identity_domain** | **string** | Identity domain ID for the Oracle MySQL Cloud Service account. | [optional] 
**service_type** | **string** | Cloud service type. Valid value is &lt;code&gt;MySQLCS&lt;/code&gt; for Oracle MySQL Cloud Service. | [optional] 
**service_name** | **string** | Name of the Oracle MySQL Cloud Service instance. | [optional] 
**cred_name** | **string** | Credential name. Currently, the only supported credential name is &lt;code&gt;vmspublickey&lt;/code&gt;. | [optional] 
**cred_type** | **string** | Credential type. Only supported value is &lt;code&gt;SSH&lt;/code&gt;. | [optional] 
**last_update_time** | **string** | Date and time the SSH key was last updated. | [optional] 
**last_update_status** | **string** | Status of the last update for the SSH key. | [optional] 
**last_update_message** | **string** | Message returned from the last update for the SSH key. For example: &lt;code&gt;newly created&lt;/code&gt;, &lt;code&gt;updated by &lt;em&gt;username&lt;/em&gt;&lt;/code&gt;. | [optional] 
**os_user_name** | **string** | Compute virtual machine OS user name. Only supported value is &lt;code&gt;opc&lt;/code&gt;. | [optional] 
**compute_key_name** | **string** | Compute sshkey object key name. | [optional] 
**public_key** | **string** | Public key for the secure shell (SSH). This key is used for authentication when connecting to the Oracle MySQL Cloud Service instance using an SSH client. | [optional] 
**description** | **string** | Credential description of the credential name. | [optional] 
**service_state** | **string** | State of the service instance. For example, &lt;code&gt;RUNNING&lt;/code&gt;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


