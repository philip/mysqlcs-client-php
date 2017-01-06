# Swagger\Client\HealthMonitoringApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMonitoringRecords**](HealthMonitoringApi.md#getMonitoringRecords) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/healthcheck | Monitor a Service Instance


# **getMonitoringRecords**
> \Swagger\Client\Model\MonitorResponse getMonitoringRecords($identity_domain_id, $service_id, $format)

Monitor a Service Instance

Returns health monitoring data for the specified Oracle MySQL Cloud Service instance.<p>Monitoring information is provided at the following levels: <ul><li>Service instance</li><li>Component (mysql)</li><li>Virtual Machine (vmInstances) </li><li>MySQL Server</li></ul>. The query parameter <code>format</code> is required, and the only supported format now is <code>v1</code>.

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

$api_instance = new Swagger\Client\Api\HealthMonitoringApi();
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.
$format = "format_example"; // string | Format of the health data. The only supported format for health data is <code>v1</code>.

try {
    $result = $api_instance->getMonitoringRecords($identity_domain_id, $service_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthMonitoringApi->getMonitoringRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity_domain_id** | **string**| Name of the identity domain for the MySQL Cloud Service account. |
 **service_id** | **string**| Name of the Oracle MySQL Cloud Service instance. |
 **format** | **string**| Format of the health data. The only supported format for health data is &lt;code&gt;v1&lt;/code&gt;. |

### Return type

[**\Swagger\Client\Model\MonitorResponse**](../Model/MonitorResponse.md)

### Authorization

[defaultBasicAuth](../../README.md#defaultBasicAuth), [defaultApiKey](../../README.md#defaultApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

