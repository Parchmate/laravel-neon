<?php

namespace Parchmate\LaravelNeon\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\CheckArray;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class NeonAuthIntegrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration();
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
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('db_name', $data)) {
                $object->setDbName($data['db_name']);
                unset($data['db_name']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('owned_by', $data)) {
                $object->setOwnedBy($data['owned_by']);
                unset($data['owned_by']);
            }
            if (\array_key_exists('transfer_status', $data)) {
                $object->setTransferStatus($data['transfer_status']);
                unset($data['transfer_status']);
            }
            if (\array_key_exists('jwks_url', $data)) {
                $object->setJwksUrl($data['jwks_url']);
                unset($data['jwks_url']);
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
            $data['branch_id'] = $object->getBranchId();
            $data['db_name'] = $object->getDbName();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['owned_by'] = $object->getOwnedBy();
            if ($object->isInitialized('transferStatus') && null !== $object->getTransferStatus()) {
                $data['transfer_status'] = $object->getTransferStatus();
            }
            $data['jwks_url'] = $object->getJwksUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class => false];
        }
    }
} else {
    class NeonAuthIntegrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration();
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
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('db_name', $data)) {
                $object->setDbName($data['db_name']);
                unset($data['db_name']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('owned_by', $data)) {
                $object->setOwnedBy($data['owned_by']);
                unset($data['owned_by']);
            }
            if (\array_key_exists('transfer_status', $data)) {
                $object->setTransferStatus($data['transfer_status']);
                unset($data['transfer_status']);
            }
            if (\array_key_exists('jwks_url', $data)) {
                $object->setJwksUrl($data['jwks_url']);
                unset($data['jwks_url']);
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
            $data['branch_id'] = $object->getBranchId();
            $data['db_name'] = $object->getDbName();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['owned_by'] = $object->getOwnedBy();
            if ($object->isInitialized('transferStatus') && null !== $object->getTransferStatus()) {
                $data['transfer_status'] = $object->getTransferStatus();
            }
            $data['jwks_url'] = $object->getJwksUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class => false];
        }
    }
}