# Swagger\Client\AccessRulesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccessRules**](AccessRulesApi.md#getAccessRules) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/accessrules | View All Access Rules
[**insertAccessRule**](AccessRulesApi.md#insertAccessRule) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/accessrules | Add an Access Rule
[**updateAccessRule**](AccessRulesApi.md#updateAccessRule) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/accessrules/{ruleName} | Update an Access Rule


# **getAccessRules**
> \Swagger\Client\Model\SecrulesResponse getAccessRules($x_id_tenant_name, $identity_domain_id, $service_id)

View All Access Rules

Returns information about all access rules defined for an Oracle MySQL Cloud Service instance.<p>The access rules that control external access to the MySQL Server, and MySQL Enterprise Monitor are disabled by default. To gain access to the administration consoles, you are required to explicitly enable the access rules for them.

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

$api_instance = new Swagger\Client\Api\AccessRulesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getAccessRules($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRulesApi->getAccessRules: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SecrulesResponse**](../Model/SecrulesResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertAccessRule**
> insertAccessRule($x_id_tenant_name, $identity_domain_id, $service_id, $payload)

Add an Access Rule

Adds (inserts) a new access rule to an Oracle MySQL Cloud Service instance.

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

$api_instance = new Swagger\Client\Api\AccessRulesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$payload = new \Swagger\Client\Model\AddsecrulePostrequest(); // \Swagger\Client\Model\AddsecrulePostrequest | The request body defines the details of the access rule to add.

try {
    $api_instance->insertAccessRule($x_id_tenant_name, $identity_domain_id, $service_id, $payload);
} catch (Exception $e) {
    echo 'Exception when calling AccessRulesApi->insertAccessRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **payload** | [**\Swagger\Client\Model\AddsecrulePostrequest**](../Model/\Swagger\Client\Model\AddsecrulePostrequest.md)| The request body defines the details of the access rule to add. |

### Return type

void (empty response body)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccessRule**
> \Swagger\Client\Model\SecrulesDetails updateAccessRule($x_id_tenant_name, $identity_domain_id, $service_id, $rule_name, $payload)

Update an Access Rule

Disable, enable, or delete an access rule only. You cannot change the rule details.

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

$api_instance = new Swagger\Client\Api\AccessRulesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$rule_name = "rule_name_example"; // string | Name of the access rule to disable or enable.
$payload = new \Swagger\Client\Model\UpdatesecrulePutrequest(); // \Swagger\Client\Model\UpdatesecrulePutrequest | The request body defines the details of the disable, enable, or delete request.

try {
    $result = $api_instance->updateAccessRule($x_id_tenant_name, $identity_domain_id, $service_id, $rule_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRulesApi->updateAccessRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_id_tenant_name** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **rule_name** | **string**| Name of the access rule to disable or enable. |
 **payload** | [**\Swagger\Client\Model\UpdatesecrulePutrequest**](../Model/\Swagger\Client\Model\UpdatesecrulePutrequest.md)| The request body defines the details of the disable, enable, or delete request. |

### Return type

[**\Swagger\Client\Model\SecrulesDetails**](../Model/SecrulesDetails.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

