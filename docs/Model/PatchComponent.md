# PatchComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of a component patch. | [optional] 
**component** | **string** | Name of the component in this patch. For example, &lt;code&gt;mysql&lt;/code&gt;. | [optional] 
**version** | **string** | Version of the patch component. | [optional] 
**md5sum** | **string** | Checksum used to validate the patch binary. | [optional] 
**provisioning_object_ref** | **string** | Location of binary to use when creating a new service instance. | [optional] 
**patching_object_ref** | **string** | Location of binary to use when patching a service instance. | [optional] 
**preserve_files** | **string[]** | List of files to be preserved during patching. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


