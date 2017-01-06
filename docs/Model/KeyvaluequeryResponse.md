# KeyvaluequeryResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\Swagger\Client\Model\KeyValueItem[]**](KeyValueItem.md) | Details of each SSH keys. | [optional] 
**has_more** | **bool** | Flag that specifies whether the list returned by the query is full (&lt;code&gt;false&lt;/code&gt;) or partial (&lt;code&gt;true&lt;/code&gt;). &lt;p&gt;When the list is partial, use the &lt;code&gt;offset&lt;/code&gt; query parameter to fetch additional results. By default, &lt;code&gt;offset&lt;/code&gt; is 0 (zero) and &lt;code&gt;limitRowCount&lt;/code&gt; is 50. | [optional] 
**total_results** | **int** | Number of results returned by the query. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


