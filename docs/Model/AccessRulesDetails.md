# AccessRulesDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_name** | **string** | Name of the rule. | [optional] 
**description** | **string** | Description of the rule. | [optional] 
**status** | **string** | Status of the rule. Valid value: &lt;code&gt;disabled&lt;/code&gt; or &lt;code&gt;enabled&lt;/code&gt;. | [optional] 
**source** | **string** | The hosts from which traffic is allowed. For example, &lt;code&gt;PUBLIC-INTERNET&lt;/code&gt; for any host on the Internet, a single IP address or a comma-separated list of subnets (in CIDR format) or IPv4 addresses. | [optional] 
**destination** | **string** | The service component to allow traffic to. For example, &lt;code&gt;mysql_MASTER&lt;/code&gt;. | [optional] 
**ports** | **string** | Ports for the rule. This can be a single port or a port range. | [optional] 
**protocol** | **string** | Communication protocol for the rule. For example, &lt;code&gt;tcp&lt;/code&gt;. | [optional] 
**rule_type** | **string** | Type of rule. For example, &lt;code&gt;SYSTEM&lt;/code&gt;, &lt;code&gt;DEFAULT&lt;/code&gt;, or &lt;code&gt;USER&lt;/code&gt;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


