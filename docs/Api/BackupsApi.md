# Swagger\Client\BackupsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBackup**](BackupsApi.md#deleteBackup) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/deletedbackups | Delete a Backup (Asynchronous)
[**getAllBackups**](BackupsApi.md#getAllBackups) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backups | View All Backups
[**getAllDeletedBackups**](BackupsApi.md#getAllDeletedBackups) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/deletedbackups | View All Deleted Backups
[**getBackup**](BackupsApi.md#getBackup) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backups/{backupId} | View a Backup
[**getBackupConfiguration**](BackupsApi.md#getBackupConfiguration) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backupconfig | View the Backup Configuration
[**getDeletedBackup**](BackupsApi.md#getDeletedBackup) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/deletedbackups/{jobId} | View a Deleted Backup
[**getRestoreBackupOperations**](BackupsApi.md#getRestoreBackupOperations) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/restoredbackups | View All Restoration Operations
[**getRestoreBackupStatus**](BackupsApi.md#getRestoreBackupStatus) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/restoredbackups/{jobId} | View the Status of a Restoration Operation
[**restoreBackup**](BackupsApi.md#restoreBackup) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/restoredbackups | Restore a Service Instance from Backup
[**startBackup**](BackupsApi.md#startBackup) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backups | Initiate an On-demand Backup
[**updateBackupConfiguration**](BackupsApi.md#updateBackupConfiguration) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backupconfig | Update the Backup Configuration


# **deleteBackup**
> \Swagger\Client\Model\AcceptedResponse deleteBackup($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Delete a Backup (Asynchronous)

Deletes a backup of an Oracle MySQL Cloud Service instance. This is an asynchronous operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\DeleteBackupRequest(); // \Swagger\Client\Model\DeleteBackupRequest | The request body contains details of the delete backup request. You must specify at least one attribute.

try {
    $result = $api_instance->deleteBackup($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->deleteBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\DeleteBackupRequest**](../Model/\Swagger\Client\Model\DeleteBackupRequest.md)| The request body contains details of the delete backup request. You must specify at least one attribute. |

### Return type

[**\Swagger\Client\Model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBackups**
> \Swagger\Client\Model\ViewAllBackupsResponse getAllBackups($x_id_tenant_name, $identity_domain_id, $service_id)

View All Backups

Returns information about all backups of an Oracle MySQL Cloud Service instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getAllBackups($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getAllBackups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |

### Return type

[**\Swagger\Client\Model\ViewAllBackupsResponse**](../Model/ViewAllBackupsResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDeletedBackups**
> \Swagger\Client\Model\ViewAllDeletedResponse getAllDeletedBackups($x_id_tenant_name, $identity_domain_id, $service_id)

View All Deleted Backups

Returns information about all deleted backups for an Oracle MySQL Cloud Service instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getAllDeletedBackups($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getAllDeletedBackups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |

### Return type

[**\Swagger\Client\Model\ViewAllDeletedResponse**](../Model/ViewAllDeletedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBackup**
> \Swagger\Client\Model\ViewBackup getBackup($x_id_tenant_name, $identity_domain_id, $service_id, $backup_id, $include_linked_details)

View a Backup

Returns information about a backup of an Oracle MySQL Cloud Service instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$backup_id = "backup_id_example"; // string | Backup ID.
$include_linked_details = true; // bool | Flag that specifies whether to include information (<code>true</code>) or exclude information about related backups (<code>false</code>). When set to <code>true</code>:<ul><li>For a full backup, includes information about all incremental backups performed since the last full backup.</li><li>For an incremental backup, includes information about the previous full backup.</li></ul>Defaults to <code>false</code>, excluding information about related backups.

try {
    $result = $api_instance->getBackup($x_id_tenant_name, $identity_domain_id, $service_id, $backup_id, $include_linked_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **backup_id** | **string**| Backup ID. |
 **include_linked_details** | **bool**| Flag that specifies whether to include information (&lt;code&gt;true&lt;/code&gt;) or exclude information about related backups (&lt;code&gt;false&lt;/code&gt;). When set to &lt;code&gt;true&lt;/code&gt;:&lt;ul&gt;&lt;li&gt;For a full backup, includes information about all incremental backups performed since the last full backup.&lt;/li&gt;&lt;li&gt;For an incremental backup, includes information about the previous full backup.&lt;/li&gt;&lt;/ul&gt;Defaults to &lt;code&gt;false&lt;/code&gt;, excluding information about related backups. | [optional]

### Return type

[**\Swagger\Client\Model\ViewBackup**](../Model/ViewBackup.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBackupConfiguration**
> \Swagger\Client\Model\BackupconfigResponse getBackupConfiguration($x_id_tenant_name, $identity_domain_id, $service_id)

View the Backup Configuration

Returns the backup configuration for the Oracle MySQL Cloud Service. The information includes:<ul><li>Default retention time for incremental backups and full on-demand backups; full scheduled backups are retained until their last related incremental backup is no longer available</li><li>Schedule for full backups</li><li>Schedule for incremental backups</li><li>Date and time of the last successful backup</li><li>Date and time for the next scheduled backup (both full and incremental)</li><li>Total cloud storage container used for backups and total backup volume used</li>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getBackupConfiguration($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getBackupConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |

### Return type

[**\Swagger\Client\Model\BackupconfigResponse**](../Model/BackupconfigResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeletedBackup**
> \Swagger\Client\Model\ViewDeletedResponse getDeletedBackup($x_id_tenant_name, $identity_domain_id, $service_id, $job_id)

View a Deleted Backup

Returns information about a deleted backup for an Oracle MySQL Cloud Service instance based on the job ID provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$job_id = "job_id_example"; // string | Job ID for the backup deletion.

try {
    $result = $api_instance->getDeletedBackup($x_id_tenant_name, $identity_domain_id, $service_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getDeletedBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **job_id** | **string**| Job ID for the backup deletion. |

### Return type

[**\Swagger\Client\Model\ViewDeletedResponse**](../Model/ViewDeletedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRestoreBackupOperations**
> \Swagger\Client\Model\ViewAllRestorationsResponse getRestoreBackupOperations($x_id_tenant_name, $identity_domain_id, $service_id)

View All Restoration Operations

Returns information for all restoration operations for an Oracle MySQL Cloud Service instance.<p>By default, only successful restoration operations are included. Set the <code>?includeFailed</code> query parameter to <code>true</code> to include both successful and failed restoration operations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getRestoreBackupOperations($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getRestoreBackupOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |

### Return type

[**\Swagger\Client\Model\ViewAllRestorationsResponse**](../Model/ViewAllRestorationsResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRestoreBackupStatus**
> \Swagger\Client\Model\RestoreHistory getRestoreBackupStatus($x_id_tenant_name, $identity_domain_id, $service_id, $job_id)

View the Status of a Restoration Operation

Returns the status of the specified restoration operation of an Oracle MySQL Cloud Service instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$job_id = "job_id_example"; // string | Job ID of the restoration operation.

try {
    $result = $api_instance->getRestoreBackupStatus($x_id_tenant_name, $identity_domain_id, $service_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getRestoreBackupStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **job_id** | **string**| Job ID of the restoration operation. |

### Return type

[**\Swagger\Client\Model\RestoreHistory**](../Model/RestoreHistory.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreBackup**
> \Swagger\Client\Model\AcceptedResponse restoreBackup($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Restore a Service Instance from Backup

Restores the Oracle MySQL Cloud Service instance from a specified backup; or restored to a point-in-time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\RestorationPostrequest(); // \Swagger\Client\Model\RestorationPostrequest | The request body defines the details of the restoration request.

try {
    $result = $api_instance->restoreBackup($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->restoreBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\RestorationPostrequest**](../Model/\Swagger\Client\Model\RestorationPostrequest.md)| The request body defines the details of the restoration request. |

### Return type

[**\Swagger\Client\Model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startBackup**
> \Swagger\Client\Model\AcceptedResponse startBackup($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Initiate an On-demand Backup

Initiates an on-demand backup for an Oracle MySQL Cloud Service instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\OndemandRequest(); // \Swagger\Client\Model\OndemandRequest | The request body contains details of the on-demand backup request.

try {
    $result = $api_instance->startBackup($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->startBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\OndemandRequest**](../Model/\Swagger\Client\Model\OndemandRequest.md)| The request body contains details of the on-demand backup request. |

### Return type

[**\Swagger\Client\Model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBackupConfiguration**
> \Swagger\Client\Model\BackupconfigResponse updateBackupConfiguration($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Update the Backup Configuration

Updates the backup configuration for an Oracle MySQL Cloud Service instance. Specifically, you can update the following details:<ul><li>Schedule for full and incremental backups</li><li>Default retention time for incremental backups and full on-demand backups; note that full scheduled backups are retained until their last related incremental backup is no longer available, if any</li><li>Storage Cloud Service URI and user name for the container that is used to store backups</li></ul><p>To disable a full or incremental backup, set the <code>fullBackupSchedule</code> or <code>incrementalBackupSchedule</code> value, respectively, to <code>null</code>. For example: <code>{&quot;fullBackupSchedule&quot;: null}</code>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\BackupsApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\BackupconfigPostrequest(); // \Swagger\Client\Model\BackupconfigPostrequest | The request body defines the details of the backup configuration update request. Specify only those attributes that you want to update.

try {
    $result = $api_instance->updateBackupConfiguration($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->updateBackupConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\BackupconfigPostrequest**](../Model/\Swagger\Client\Model\BackupconfigPostrequest.md)| The request body defines the details of the backup configuration update request. Specify only those attributes that you want to update. |

### Return type

[**\Swagger\Client\Model\BackupconfigResponse**](../Model/BackupconfigResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

