# ViewInstance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | ID of the Oracle MySQL Cloud Service instance. | [optional] 
**service_name** | **string** | Name of the Oracle MySQL Cloud Service instance. | [optional] 
**service_type** | **string** | Type of the Oracle MySQL Cloud Service instance, such as &lt;code&gt;MySQLCS&lt;/code&gt;. | [optional] 
**domain_name** | **string** | The identity domain housing the service instance. | [optional] 
**service_version** | **string** | The major version of MySQL Server. For example, &lt;code&gt;5.7&lt;/code&gt;. | [optional] 
**release_version** | **string** | The release version of MySQL Server. For example, &lt;code&gt;5.7.13&lt;/code&gt;. | [optional] 
**meta_version** | **string** | The release version of metadata service manager. | [optional] 
**service_level** | **string** | The service level of the service instance. For example, &lt;code&gt;PAAS&lt;/code&gt; for Oracle Cloud Service. | [optional] 
**subscription** | **string** | The subscription type of the service instance; either &lt;code&gt;MONTHLY&lt;/code&gt; or &lt;code&gt;HOURLY&lt;/code&gt;. | [optional] 
**metering_frequency** | **string** | The billing frequency of the service instance; either &lt;code&gt;MONTHLY&lt;/code&gt; or &lt;code&gt;HOURLY&lt;/code&gt;. | [optional] 
**edition** | **string** | The edition of MySQL Server. For example, &lt;code&gt;EE&lt;/code&gt;. | [optional] 
**cloud_storage_container** | **string** | Name of the Oracle Storage Cloud Service container used to provide storage for MySQL service instance backups. | [optional] 
**attributes** | [**\Swagger\Client\Model\ServiceAttribute[]**](ServiceAttribute.md) | Array of the service attributes. For example, &lt;code&gt;MYSQL_PORT&lt;/code&gt;, &lt;code&gt;CLOUD_STORAGE_CONTAINER&lt;/code&gt;, &lt;code&gt;LOCAL_BACKUP_VOLUME_SIZE&lt;/code&gt;, etc. | [optional] 
**components** | [**\Swagger\Client\Model\ViewServiceComponent[]**](ViewServiceComponent.md) | details of each service component. | [optional] 
**activity_logs** | [**\Swagger\Client\Model\ViewActivityLog[]**](ViewActivityLog.md) | activities of the service instance. | [optional] 
**service_level_display_name** | **string** | The display name of the service level. For example, &lt;code&gt;Oracle MySQL Cloud Service&lt;/code&gt;. | [optional] 
**edition_display_name** | **string** | The display name of MySQL Server edition. For example, &lt;code&gt;Enterprise Edition&lt;/code&gt;. | [optional] 
**metering_frequency_display_name** | **string** | The display name of the metering frequency; either &lt;code&gt;Monthly&lt;/code&gt; or &lt;code&gt;Hourly&lt;/code&gt;. | [optional] 
**data_volume_size** | **string** | Storage volume size for MySQL data. | [optional] 
**mysql_port** | **string** | The listener port for MySQL server. | [optional] 
**backup_destination** | **string** | Backup destination; either &lt;code&gt;BOTH&lt;/code&gt; - Both Cloud Storage and Local Storage, or &lt;code&gt;NONE&lt;/code&gt; - None. | [optional] 
**cloud_storage_container** | **string** | Name of the Oracle Storage Cloud Service container used to provide storage for MySQL service instance backups. | [optional] 
**local_backup_volume_mount** | **string** | The volume mount point for local backups. | [optional] 
**local_backup_volume_size** | **string** | Storage volume size for MySQL local backups. | [optional] 
**total_shared_storage** | **string** | The total shared storage size; always &lt;code&gt;0&lt;/code&gt; for MySQL Cloud Service. | [optional] 
**service_state_display_name** | **string** | The display name of the service current state. | [optional] 
**compute_site_name** | **string** | The Oracle Cloud location housing the service instance. | [optional] 
**patching** | [**\Swagger\Client\Model\ViewServicePatching**](ViewServicePatching.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


