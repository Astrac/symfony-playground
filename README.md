Astrac bundles demo project
===========================

This project contains some code showing some symfony bundles I developed for the
Symfony 2 framework.

Tagging patterns bundle
-----------------------

This bundle contains the implementation of some dependency injection patterns I
found during my development with the Symfony 2 framework.

### Register Me

What I call the *Register Me* pattern is the implementation of a DI tag to invoke
a method on a *register* service passing it the tagged service along with potential
other parameters.

The implementation of this pattern is done using the following configuration:

    astrac_tagging_patterns:
      register_me:
        -
          tag: %registering_tag%
          register: %register_service_name%
          method: %registering_method%
          parameters: %registering_method_parameters%

The parameters have the following meanings:

* **registering_tag** - Name of the DI tag that will be used to register services
* **register_service_name** - The name of the service that will act as a register
* **registering_method** - The method that will be invoked on the specified service
* **registering_method_parameters** - Array of tag attribute names that will be
  passed to the register service. The order of these parameters is preserved and
  the __service name is used to identify the tagged service itself.

The example shows a common usage of this pattern: implementing a common access
point for multiple implementations of a common interface.
