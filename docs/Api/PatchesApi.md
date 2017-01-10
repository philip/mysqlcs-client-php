# Swagger\Client\PatchesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyPatch**](PatchesApi.md#applyPatch) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/{patchId} | Apply a Patch
[**doPatchPrecheck**](PatchesApi.md#doPatchPrecheck) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/checks/{patchId} | Perform a Patching Precheck
[**getAppliedPatches**](PatchesApi.md#getAppliedPatches) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/applied | View Applied Patches
[**getAvailablePatches**](PatchesApi.md#getAvailablePatches) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/available | View Available Patches
[**getPatchStatus**](PatchesApi.md#getPatchStatus) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/applied/job/{jobId} | View a Patch Operation Status
[**getPrecheckOperations**](PatchesApi.md#getPrecheckOperations) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/checks | View All Patching Precheck Operations
[**getPrecheckStatus**](PatchesApi.md#getPrecheckStatus) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/checks/job/{jobId} | View the Status of a Patching Precheck Operation
[**rollbackPatch**](PatchesApi.md#rollbackPatch) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/{rollbackId}/rollback | Rollback a Patch


# **applyPatch**
> \Swagger\Client\Model\AcceptedResponse applyPatch($x_id_tenant_name, $identity_domain_id, $service_id, $patch_id, $payload)

Apply a Patch

Applies a patch to an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$patch_id = "patch_id_example"; // string | Patch ID. The patch ID can be retrieved via getting the list of available patches.
$payload = new \Swagger\Client\Model\PatchRequest(); // \Swagger\Client\Model\PatchRequest | The request body contains details of the patch request. There are no required values, but a value is required. Pass in {} if settings are not required.

try {
    $result = $api_instance->applyPatch($x_id_tenant_name, $identity_domain_id, $service_id, $patch_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->applyPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **patch_id** | **string**| Patch ID. The patch ID can be retrieved via getting the list of available patches. |
 **payload** | [**\Swagger\Client\Model\PatchRequest**](../Model/\Swagger\Client\Model\PatchRequest.md)| The request body contains details of the patch request. There are no required values, but a value is required. Pass in {} if settings are not required. |

### Return type

[**\Swagger\Client\Model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doPatchPrecheck**
> \Swagger\Client\Model\AcceptedResponse doPatchPrecheck($x_id_tenant_name, $identity_domain_id, $service_id, $patch_id)

Perform a Patching Precheck

Performs a precheck to identity potential issues that might prevent the specified patch from completing successfully without actually patching the service instance. Specifically, the patching precheck reports on the following conditions: <ul><li>Disk space shortage</li><li>Database connectivity failure</li><li>Server access failure</li><li>Storage access failure</li></ul><p>Prechecks do not check whether another administration task (such as backup, restoration, or scaling) is in progress, which would prevent patching.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$patch_id = "patch_id_example"; // string | ID of the patch to precheck.

try {
    $result = $api_instance->doPatchPrecheck($x_id_tenant_name, $identity_domain_id, $service_id, $patch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->doPatchPrecheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **patch_id** | **string**| ID of the patch to precheck. |

### Return type

[**\Swagger\Client\Model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppliedPatches**
> \Swagger\Client\Model\AppliedPatchesResponse getAppliedPatches($x_id_tenant_name, $identity_domain_id, $service_id)

View Applied Patches

Returns a list of all applied patches for an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getAppliedPatches($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->getAppliedPatches: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AppliedPatchesResponse**](../Model/AppliedPatchesResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailablePatches**
> \Swagger\Client\Model\AvailablePatchesResponse getAvailablePatches($x_id_tenant_name, $identity_domain_id, $service_id)

View Available Patches

Returns a list of all available patches for an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getAvailablePatches($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->getAvailablePatches: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AvailablePatchesResponse**](../Model/AvailablePatchesResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPatchStatus**
> \Swagger\Client\Model\AppliedPatch getPatchStatus($x_id_tenant_name, $identity_domain_id, $service_id, $job_id)

View a Patch Operation Status

Returns information about the specified patching operation for an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$job_id = "job_id_example"; // string | Unique ID of a patching or rollback operation.

try {
    $result = $api_instance->getPatchStatus($x_id_tenant_name, $identity_domain_id, $service_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->getPatchStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **job_id** | **string**| Unique ID of a patching or rollback operation. |

### Return type

[**\Swagger\Client\Model\AppliedPatch**](../Model/AppliedPatch.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrecheckOperations**
> \Swagger\Client\Model\ViewPrecheckResponse getPrecheckOperations($x_id_tenant_name, $identity_domain_id, $service_id)

View All Patching Precheck Operations

Returns the status of all patching precheck operations that have been executed against the service instance.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getPrecheckOperations($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->getPrecheckOperations: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ViewPrecheckResponse**](../Model/ViewPrecheckResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrecheckStatus**
> \Swagger\Client\Model\ViewPrecheckResponse getPrecheckStatus($x_id_tenant_name, $identity_domain_id, $service_id, $job_id)

View the Status of a Patching Precheck Operation

Returns the status of a patching precheck operation.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$job_id = "job_id_example"; // string | Job ID of the operation that was returned when the patching precheck was initiated.

try {
    $result = $api_instance->getPrecheckStatus($x_id_tenant_name, $identity_domain_id, $service_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->getPrecheckStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **job_id** | **string**| Job ID of the operation that was returned when the patching precheck was initiated. |

### Return type

[**\Swagger\Client\Model\ViewPrecheckResponse**](../Model/ViewPrecheckResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rollbackPatch**
> \Swagger\Client\Model\AcceptedResponse rollbackPatch($x_id_tenant_name, $identity_domain_id, $service_id, $rollback_id, $payload)

Rollback a Patch

Rolls back a patch for an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\PatchesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$rollback_id = "rollback_id_example"; // string | ID of the rollback that is associated to the completed patching operation.
$payload = new \Swagger\Client\Model\RollbackRequest(); // \Swagger\Client\Model\RollbackRequest | The request body contains a note about the rollback request.

try {
    $result = $api_instance->rollbackPatch($x_id_tenant_name, $identity_domain_id, $service_id, $rollback_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatchesApi->rollbackPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **rollback_id** | **string**| ID of the rollback that is associated to the completed patching operation. |
 **payload** | [**\Swagger\Client\Model\RollbackRequest**](../Model/\Swagger\Client\Model\RollbackRequest.md)| The request body contains a note about the rollback request. |

### Return type

[**\Swagger\Client\Model\AcceptedResponse**](../Model/AcceptedResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

