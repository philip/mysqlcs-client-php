# CreateInstanceServiceParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_name** | **string** | Name of MySQL Cloud Service instance. The service name:&lt;ul&gt;&lt;li&gt;Must not exceed 50 characters.&lt;/li&gt;&lt;li&gt;Must start with a letter.&lt;/li&gt;&lt;li&gt;Must contain only letters, numbers, or hyphens.&lt;/li&gt;&lt;li&gt;Must not end with a hyphen.&lt;/li&gt;&lt;li&gt;Must not contain any other special characters.&lt;/li&gt;&lt;li&gt;Must be unique within the identity domain.&lt;/li&gt;&lt;/ul&gt; | 
**service_description** | **string** | Free-form text that provides additional information about the service instance. | [optional] 
**metering_frequency** | **string** | The billing frequency of the service instance; either &lt;code&gt;MONTHLY&lt;/code&gt; or &lt;code&gt;HOURLY&lt;/code&gt;. | [optional] 
**backup_destination** | **string** | Backup destination. Valid values are: &lt;li&gt;&lt;code&gt;BOTH&lt;/code&gt; - Both Cloud Storage and Local Storage&lt;/li&gt;&lt;li&gt;&lt;code&gt;NONE&lt;/code&gt; - None&lt;/li&gt; | [optional] 
**cloud_storage_container** | **string** | Name of the Oracle Storage Cloud Service container used to provide storage for your service instance backups. Use the following format to specify the container name: &lt;code&gt;&amp;lt;&lt;i&gt;storageservicename&lt;/i&gt;&amp;gt;-&amp;lt;&lt;i&gt;storageidentitydomain&lt;/i&gt;&amp;gt;&amp;#47;&amp;lt;&lt;i&gt;containername&lt;/i&gt;&amp;gt;&lt;/code&gt;&lt;p&gt;&lt;b&gt;Notes&lt;/b&gt;:&lt;ul&gt;&lt;li&gt;An Oracle Storage Cloud Service container is not required when provisioning a MySQL Cloud Service instance.&lt;/li&gt;&lt;li&gt;Do not use an Oracle Storage Cloud container that you use to back up MySQL Cloud Service instances for any other purpose. Using the container for multiple purposes can result in billing errors.&lt;/li&gt;&lt;/ul&gt; | [optional] 
**cloud_storage_user** | **string** | Username for the Oracle Storage Cloud Service administrator. | [optional] 
**cloud_storage_password** | **string** | Password for the Oracle Storage Cloud Service administrator. | [optional] 
**cloud_storage_container_auto_generate** | **bool** | Indicate whether to create an Oracle Storage Cloud container automatically. | [optional] 
**vm_user** | **string** | VM operating system user that is valid for variations of compute based services. It will default to the username &lt;code&gt;opc&lt;/code&gt; when not specified. | [optional] 
**vm_public_key_text** | **string** | Public key for the secure shell (SSH). This key will be used for authentication when connecting to the MySQL Cloud Service instance using an SSH client. You generate an SSH public-private key pair using a standard SSH key generation tool. | 
**no_rollback** | **bool** | This optional property can be set to &lt;code&gt;true&lt;/code&gt; to avoid automatic rollback and retry for the service. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


