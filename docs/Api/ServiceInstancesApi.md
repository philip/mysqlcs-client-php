# Swagger\Client\ServiceInstancesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInstance**](ServiceInstancesApi.md#addInstance) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances | Create an Oracle MySQL Cloud Service Instance
[**addInstanceStorage**](ServiceInstancesApi.md#addInstanceStorage) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/storage/add | Add storage to a MySQL Cloud Service instance
[**deleteInstance**](ServiceInstancesApi.md#deleteInstance) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId} | Delete a Service Instance
[**getAllInstances**](ServiceInstancesApi.md#getAllInstances) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances | View All Service Instances
[**getInstance**](ServiceInstancesApi.md#getInstance) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId} | View a Service Instance
[**getJobStatus**](ServiceInstancesApi.md#getJobStatus) | **GET** /paas/api/v1.1/activitylog/{identityDomainId}/job/{jobId} | View the Activity Log of a Job
[**scaleInstance**](ServiceInstancesApi.md#scaleInstance) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/hosts/scale | Scale a MySQL Cloud Service instance
[**updateInstanceStatus**](ServiceInstancesApi.md#updateInstanceStatus) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/hosts/{function} | Start, Stop, or Restart a Service Instance


# **addInstance**
> \Swagger\Client\Model\ServiceAcceptedResponse addInstance($x_id_tenant_name, $identity_domain_id, $payload)

Create an Oracle MySQL Cloud Service Instance

Create an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$payload = new \Swagger\Client\Model\ServiceCreateInstanceRequest(); // \Swagger\Client\Model\ServiceCreateInstanceRequest | The request body defines the details of the service instance creation request

try {
    $result = $api_instance->addInstance($x_id_tenant_name, $identity_domain_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->addInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **payload** | [**\Swagger\Client\Model\ServiceCreateInstanceRequest**](../Model/\Swagger\Client\Model\ServiceCreateInstanceRequest.md)| The request body defines the details of the service instance creation request |

### Return type

[**\Swagger\Client\Model\ServiceAcceptedResponse**](../Model/ServiceAcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/vnd.com.oracle.oracloud.provisioning.Service+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInstanceStorage**
> \Swagger\Client\Model\ServiceAcceptedResponse addInstanceStorage($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Add storage to a MySQL Cloud Service instance

MySQL Cloud Service supports adding storage to  <code>dataStorage</code>,  <code>backupStorage</code>, or  <code>MySQLLogStorage</code>.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\ServiceAddStoragePostRequest(); // \Swagger\Client\Model\ServiceAddStoragePostRequest | The request body defines the details of the request.

try {
    $result = $api_instance->addInstanceStorage($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->addInstanceStorage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\ServiceAddStoragePostRequest**](../Model/\Swagger\Client\Model\ServiceAddStoragePostRequest.md)| The request body defines the details of the request. |

### Return type

[**\Swagger\Client\Model\ServiceAcceptedResponse**](../Model/ServiceAcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/vnd.com.oracle.oracloud.provisioning.Service+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInstance**
> \Swagger\Client\Model\ServiceAcceptedResponse deleteInstance($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Delete a Service Instance

Delete an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\ServiceDeleteInstancePutRequest(); // \Swagger\Client\Model\ServiceDeleteInstancePutRequest | The request body is reserved for options, although no options exist at this time. Instead, pass in an empty object, such as {}.

try {
    $result = $api_instance->deleteInstance($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->deleteInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\ServiceDeleteInstancePutRequest**](../Model/\Swagger\Client\Model\ServiceDeleteInstancePutRequest.md)| The request body is reserved for options, although no options exist at this time. Instead, pass in an empty object, such as {}. |

### Return type

[**\Swagger\Client\Model\ServiceAcceptedResponse**](../Model/ServiceAcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/vnd.com.oracle.oracloud.provisioning.Service+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInstances**
> \Swagger\Client\Model\ServiceViewAllInstances getAllInstances($x_id_tenant_name, $identity_domain_id)

View All Service Instances

Return information about all Oracle MySQL Cloud Service instances.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.

try {
    $result = $api_instance->getAllInstances($x_id_tenant_name, $identity_domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->getAllInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |

### Return type

[**\Swagger\Client\Model\ServiceViewAllInstances**](../Model/ServiceViewAllInstances.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstance**
> \Swagger\Client\Model\ServiceViewInstance getInstance($x_id_tenant_name, $identity_domain_id, $service_id)

View a Service Instance

Return information about an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getInstance($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->getInstance: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ServiceViewInstance**](../Model/ServiceViewInstance.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobStatus**
> \Swagger\Client\Model\ServiceViewActivityLog getJobStatus($x_id_tenant_name, $identity_domain_id, $job_id)

View the Activity Log of a Job

Return the messages of an Oracle MySQL Service Instance operation.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$job_id = "job_id_example"; // string | Job ID.

try {
    $result = $api_instance->getJobStatus($x_id_tenant_name, $identity_domain_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->getJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **job_id** | **string**| Job ID. |

### Return type

[**\Swagger\Client\Model\ServiceViewActivityLog**](../Model/ServiceViewActivityLog.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scaleInstance**
> \Swagger\Client\Model\ServiceAcceptedResponse scaleInstance($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Scale a MySQL Cloud Service instance

Scale an Oracle MySQL Cloud Service instance's compute nodes up or down.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\ServiceScalePostRequest(); // \Swagger\Client\Model\ServiceScalePostRequest | The request body defines the details of the request.

try {
    $result = $api_instance->scaleInstance($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->scaleInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\ServiceScalePostRequest**](../Model/\Swagger\Client\Model\ServiceScalePostRequest.md)| The request body defines the details of the request. |

### Return type

[**\Swagger\Client\Model\ServiceAcceptedResponse**](../Model/ServiceAcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/vnd.com.oracle.oracloud.provisioning.Service+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInstanceStatus**
> \Swagger\Client\Model\ServiceAcceptedResponse updateInstanceStatus($x_id_tenant_name, $identity_domain_id, $service_id, $function, $payload)

Start, Stop, or Restart a Service Instance

Controls the lifecycle state of an Oracle Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\ServiceInstancesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$function = "function_example"; // string | Action of controlling the lifecycle state. {function} will be one of start, stop, or restart.
$payload = new \Swagger\Client\Model\ServiceChangeInstanceStatusRequest(); // \Swagger\Client\Model\ServiceChangeInstanceStatusRequest | The request body defines the details of the service instance request.

try {
    $result = $api_instance->updateInstanceStatus($x_id_tenant_name, $identity_domain_id, $service_id, $function, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceInstancesApi->updateInstanceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **function** | **string**| Action of controlling the lifecycle state. {function} will be one of start, stop, or restart. |
 **payload** | [**\Swagger\Client\Model\ServiceChangeInstanceStatusRequest**](../Model/\Swagger\Client\Model\ServiceChangeInstanceStatusRequest.md)| The request body defines the details of the service instance request. |

### Return type

[**\Swagger\Client\Model\ServiceAcceptedResponse**](../Model/ServiceAcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/vnd.com.oracle.oracloud.provisioning.Service+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

