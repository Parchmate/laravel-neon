<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class NeonAuthCreateIntegrationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auth_provider', $data)) {
                $object->setAuthProvider($data['auth_provider']);
                unset($data['auth_provider']);
            }
            if (\array_key_exists('auth_provider_project_id', $data)) {
                $object->setAuthProviderProjectId($data['auth_provider_project_id']);
                unset($data['auth_provider_project_id']);
            }
            if (\array_key_exists('pub_client_key', $data)) {
                $object->setPubClientKey($data['pub_client_key']);
                unset($data['pub_client_key']);
            }
            if (\array_key_exists('secret_server_key', $data)) {
                $object->setSecretServerKey($data['secret_server_key']);
                unset($data['secret_server_key']);
            }
            if (\array_key_exists('jwks_url', $data)) {
                $object->setJwksUrl($data['jwks_url']);
                unset($data['jwks_url']);
            }
            if (\array_key_exists('schema_name', $data)) {
                $object->setSchemaName($data['schema_name']);
                unset($data['schema_name']);
            }
            if (\array_key_exists('table_name', $data)) {
                $object->setTableName($data['table_name']);
                unset($data['table_name']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['auth_provider'] = $object->getAuthProvider();
            $data['auth_provider_project_id'] = $object->getAuthProviderProjectId();
            $data['pub_client_key'] = $object->getPubClientKey();
            $data['secret_server_key'] = $object->getSecretServerKey();
            $data['jwks_url'] = $object->getJwksUrl();
            $data['schema_name'] = $object->getSchemaName();
            $data['table_name'] = $object->getTableName();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class => false];
        }
    }
} else {
    class NeonAuthCreateIntegrationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auth_provider', $data)) {
                $object->setAuthProvider($data['auth_provider']);
                unset($data['auth_provider']);
            }
            if (\array_key_exists('auth_provider_project_id', $data)) {
                $object->setAuthProviderProjectId($data['auth_provider_project_id']);
                unset($data['auth_provider_project_id']);
            }
            if (\array_key_exists('pub_client_key', $data)) {
                $object->setPubClientKey($data['pub_client_key']);
                unset($data['pub_client_key']);
            }
            if (\array_key_exists('secret_server_key', $data)) {
                $object->setSecretServerKey($data['secret_server_key']);
                unset($data['secret_server_key']);
            }
            if (\array_key_exists('jwks_url', $data)) {
                $object->setJwksUrl($data['jwks_url']);
                unset($data['jwks_url']);
            }
            if (\array_key_exists('schema_name', $data)) {
                $object->setSchemaName($data['schema_name']);
                unset($data['schema_name']);
            }
            if (\array_key_exists('table_name', $data)) {
                $object->setTableName($data['table_name']);
                unset($data['table_name']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['auth_provider'] = $object->getAuthProvider();
            $data['auth_provider_project_id'] = $object->getAuthProviderProjectId();
            $data['pub_client_key'] = $object->getPubClientKey();
            $data['secret_server_key'] = $object->getSecretServerKey();
            $data['jwks_url'] = $object->getJwksUrl();
            $data['schema_name'] = $object->getSchemaName();
            $data['table_name'] = $object->getTableName();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class => false];
        }
    }
}