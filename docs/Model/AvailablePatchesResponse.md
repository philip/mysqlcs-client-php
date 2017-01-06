# AvailablePatchesResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_patch_gui_metadata** | [**\Swagger\Client\Model\AvailablepatchesresponseAvailablePatchGuiMetadata**](AvailablepatchesresponseAvailablePatchGuiMetadata.md) |  | [optional] 
**patch_id** | **string** | Patch ID. | [optional] 
**patch_number** | **string** | Patch number. | [optional] 
**patch_category** | **string** | Category of the patch. For example: &lt;code&gt;General&lt;/code&gt;, &lt;code&gt;Upgrade&lt;/code&gt;, &lt;code&gt;Multiple&lt;/code&gt;, &lt;code&gt;Security&lt;/code&gt;, and so on. | [optional] 
**patch_severity** | **string** | Severity of the patch. For example &lt;code&gt;Normal&lt;/code&gt;, &lt;code&gt;Mandatory&lt;/code&gt;, &lt;code&gt;Recommended&lt;/code&gt;, and so on. | [optional] 
**includes_config_upgrade** | **bool** | Flag that indicates whether the patch includes a configuration upgrade. | [optional] 
**patch_description** | **string** | Description of the patch. | [optional] 
**patch_release_url** | **string** | URL that provides more information about the patch. | [optional] 
**service_type** | **string** | Type of Oracle MySQL Cloud Service. For example: &lt;code&gt;MySQLCS&lt;/code&gt;. | [optional] 
**service_version** | **string** | Oracle MySQL Cloud Service instance version to which the patch can be applied. For example: &lt;code&gt;5.7&lt;/code&gt;, &lt;code&gt;Any&lt;/code&gt;, where &lt;code&gt;Any&lt;/code&gt; indicates that the patch can be applied to any version. | [optional] 
**release_date** | **string** | Date and time the patch is released. | [optional] 
**entry_date** | **string** | Date and time the patch is created. | [optional] 
**entry_user_id** | **string** | Name of the user that created the patch. | [optional] 
**component_patches** | [**\Swagger\Client\Model\ComponentPatch[]**](ComponentPatch.md) | Group the details of each patches in the component. | [optional] 
**patch_components** | [**\Swagger\Client\Model\PatchComponent[]**](PatchComponent.md) | Group the details of the patch to be applied. | [optional] 
**patch_type** | **string** | Patch type classification. For example, &lt;code&gt;Quarterly&lt;/Code&gt;, &lt;code&gt;Security&lt;/Code&gt;. | [optional] 
**requires_restart** | **bool** | Flag that indicates whether the patch requires a restart of the service instance. | [optional] 
**service_type_versions** | **string** | Oracle MySQL Cloud Service instance version to which the patch can be applied. For example: &lt;code&gt;5.7&lt;/code&gt;, &lt;code&gt;Any&lt;/code&gt;, where &lt;code&gt;Any&lt;/code&gt; indicates that the patch can be applied to any version. | [optional] 
**is_deleted** | **bool** | Flag that indicates whether the patch has been deleted and is no longer available. The information about the patch is not removed from the list of available patches in order to maintain an historical record of all patches. | [optional] 
**is_customer_visible** | **bool** | Flag that indicates whether the patch is visible to customer. | [optional] 
**is_auto_apply** | **bool** | Flag that indicates whether the patch can be applied automatically. | [optional] 
**induce_down_time** | **bool** | Flag that indicates whether the patching induces a downtime of the service. | [optional] 
**display_name** | **string** | Display name of the patch. | [optional] 
**meta_version** | **string** | The release version of metadata service manager. | [optional] 
**supported_strategy** | **string** | Supported patching strategy. For example: &lt;code&gt;In Place&lt;/code&gt;. | [optional] 
**release_version** | **string** | Release version of the component in this patch. | [optional] 
**patch_custom_actions** | **string[]** | List of customer actions during patching. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


