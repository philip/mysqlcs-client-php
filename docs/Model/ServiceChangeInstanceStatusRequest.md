# ServiceChangeInstanceStatusRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**force** | **bool** | Flag used to force the request. | [optional] 
**all_service_hosts** | **bool** | When true, this will control all hosts in the service.  When provided, the &#39;hosts&#39; array(s) should be empty. | [optional] 
**hosts** | **string[]** | A list of hosts to control. Note that the service is controlled if ALL hosts are listed, making this the same behavior as including &#39;allServiceHosts&#39;: true | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


