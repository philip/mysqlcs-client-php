# Swagger\Client\SSHAccessApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSshKey**](SSHAccessApi.md#addSshKey) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName} | Add a New SSH Public Key
[**getSshKeyDescription**](SSHAccessApi.md#getSshKeyDescription) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName} | View the SSH Key Description
[**getSshKeyDescriptions**](SSHAccessApi.md#getSshKeyDescriptions) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials/crednames | Retrieve the SSH Key Description Using Query Parameters
[**getSshKeyDetails**](SSHAccessApi.md#getSshKeyDetails) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/{credentialName} | View Details of the SSH Key
[**getSshKeyValue**](SSHAccessApi.md#getSshKeyValue) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials | Retrieve the SSH Key Value Using Query Parameters


# **addSshKey**
> \Swagger\Client\Model\AddsshkeyResponse addSshKey($identity_domain_id, $service_id, $credential_name, $payload)

Add a New SSH Public Key

Adds a new SSH public key for the given credential name. <p><b>Note:</b> <code>vmspublickey</code> is the only supported credential name.

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

$api_instance = new Swagger\Client\Api\SSHAccessApi();
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$credential_name = "credential_name_example"; // string | Credential name to add the SSH public key to. Currently, the only credential name you can use is <code>vmspublickey</code>.
$payload = new \Swagger\Client\Model\AddsshkeyPostrequest(); // \Swagger\Client\Model\AddsshkeyPostrequest | The request body defines the details of the SSH public key name and value.

try {
    $result = $api_instance->addSshKey($identity_domain_id, $service_id, $credential_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHAccessApi->addSshKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **credential_name** | **string**| Credential name to add the SSH public key to. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. |
 **payload** | [**\Swagger\Client\Model\AddsshkeyPostrequest**](../Model/\Swagger\Client\Model\AddsshkeyPostrequest.md)| The request body defines the details of the SSH public key name and value. |

### Return type

[**\Swagger\Client\Model\AddsshkeyResponse**](../Model/AddsshkeyResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSshKeyDescription**
> \Swagger\Client\Model\KeyDescItem getSshKeyDescription($identity_domain_id, $service_id, $credential_name)

View the SSH Key Description

Returns the credential description for the given credential name.<p><b>Note:</b> <code>vmspublickey</code> is the only supported credential name.

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

$api_instance = new Swagger\Client\Api\SSHAccessApi();
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$credential_name = "credential_name_example"; // string | Credential name associated with the SSH key. Currently, the only credential name you can use is <code>vmspublickey</code>.

try {
    $result = $api_instance->getSshKeyDescription($identity_domain_id, $service_id, $credential_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHAccessApi->getSshKeyDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **credential_name** | **string**| Credential name associated with the SSH key. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. |

### Return type

[**\Swagger\Client\Model\KeyDescItem**](../Model/KeyDescItem.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSshKeyDescriptions**
> \Swagger\Client\Model\KeydescqueryResponse getSshKeyDescriptions($identity_domain_id, $service_name, $credname)

Retrieve the SSH Key Description Using Query Parameters

Returns one or more credential descriptions for the given query parameters.<ul><li>Use the <code>?credname</code> query parameter to retrieve results for a given credential name.</li><li>Use the <code>?serviceName</code> query parameter to retrieve results for a given Oracle MySQL Cloud Service instance.</li></ul>

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

$api_instance = new Swagger\Client\Api\SSHAccessApi();
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_name = "service_name_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$credname = "credname_example"; // string | Unique credential name.<p><b>Note:</b> <code>vmspublickey</code> is the only supported credential name. This is the default if a credential name is not supplied.

try {
    $result = $api_instance->getSshKeyDescriptions($identity_domain_id, $service_name, $credname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHAccessApi->getSshKeyDescriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_name** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **credname** | **string**| Unique credential name.&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;vmspublickey&lt;/code&gt; is the only supported credential name. This is the default if a credential name is not supplied. | [optional]

### Return type

[**\Swagger\Client\Model\KeydescqueryResponse**](../Model/KeydescqueryResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSshKeyDetails**
> \Swagger\Client\Model\SshkeyDetailsResponse getSshKeyDetails($identity_domain_id, $service_id, $credential_name)

View Details of the SSH Key

Returns the credential value for the given credential name.<p><b>Note:</b> <code>vmspublickey</code> is the only supported credential name.

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

$api_instance = new Swagger\Client\Api\SSHAccessApi();
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$credential_name = "credential_name_example"; // string | Credential name associated with the SSH public key. Currently, the only credential name you can use is <code>vmspublickey</code>.

try {
    $result = $api_instance->getSshKeyDetails($identity_domain_id, $service_id, $credential_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHAccessApi->getSshKeyDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **credential_name** | **string**| Credential name associated with the SSH public key. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. |

### Return type

[**\Swagger\Client\Model\SshkeyDetailsResponse**](../Model/SshkeyDetailsResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSshKeyValue**
> \Swagger\Client\Model\KeyvaluequeryResponse getSshKeyValue($identity_domain_id, $service_name, $credname)

Retrieve the SSH Key Value Using Query Parameters

Returns one or more SSH key values for the given query parameters.<ul><li>Use the <code>?credname</code> query parameter to retrieve results for a given credential name.</li><li>Use the <code>?serviceName</code> query parameter to retrieve results for a given service instance.</li></ul>

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

$api_instance = new Swagger\Client\Api\SSHAccessApi();
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_name = "service_name_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$credname = "credname_example"; // string | Unique credential name.<p><b>Note:</b> <code>vmspublickey</code> is the only supported credential name. This is the default if a credential name is not supplied.

try {
    $result = $api_instance->getSshKeyValue($identity_domain_id, $service_name, $credname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHAccessApi->getSshKeyValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_name** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **credname** | **string**| Unique credential name.&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;vmspublickey&lt;/code&gt; is the only supported credential name. This is the default if a credential name is not supplied. | [optional]

### Return type

[**\Swagger\Client\Model\KeyvaluequeryResponse**](../Model/KeyvaluequeryResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

