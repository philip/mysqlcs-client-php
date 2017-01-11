# TODO

A list of things to do that could make this generated code more useful:

* Add identity_domain_id definition to `lib/Configuration.php`
* Add service_id definition to `lib/Configuration.php`
* Remove the x_id_tenant_name requirement (will do by fixing swagger definitions)
* Figure out why the test cases are all empty
* Figure out why two invalid tests are created where two methods are duplicated, which are:
  * `test/Model/AcceptedResponseTest.php` :: // Test attribute "job_id" `testPropertyJobId()`
  * `test/Model/ViewInstanceTest.php`     :: // Test attribute "cloud_storage_container" `testPropertyCloudStorageContainer()`
* Fix issue where defining a host is assumed, as otherwise https://localhost is used and `lib/Configuration.php` is ignored (filed a swagger_codegen bug for this)
* Determine if the SwaggerClient-php/ root dir should be kept

