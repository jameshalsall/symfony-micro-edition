# Symfony Microkernel Edition

An example implementation of Symfony's [MicroKernelTrait](https://symfony.com/doc/current/configuration/micro_kernel_trait.html).

The implementation provides:

1. Two front controllers for prod and dev environments
2. A single controller (`Controller\AppController`) with route annotations
3. Simple app configuration with per environment overrides (`config.yml`, `config_dev.yml`, `config_prod.yml`)
4. No templating engine
5. No persistence layer
