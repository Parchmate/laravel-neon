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
    class AddProjectJWKSRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\AddProjectJWKSRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('jwks_url', $data)) {
                $object->setJwksUrl($data['jwks_url']);
                unset($data['jwks_url']);
            }
            if (\array_key_exists('provider_name', $data)) {
                $object->setProviderName($data['provider_name']);
                unset($data['provider_name']);
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('jwt_audience', $data)) {
                $object->setJwtAudience($data['jwt_audience']);
                unset($data['jwt_audience']);
            }
            if (\array_key_exists('role_names', $data)) {
                $values = [];
                foreach ($data['role_names'] as $value) {
                    $values[] = $value;
                }
                $object->setRoleNames($values);
                unset($data['role_names']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['jwks_url'] = $object->getJwksUrl();
            $data['provider_name'] = $object->getProviderName();
            if ($object->isInitialized('branchId') && null !== $object->getBranchId()) {
                $data['branch_id'] = $object->getBranchId();
            }
            if ($object->isInitialized('jwtAudience') && null !== $object->getJwtAudience()) {
                $data['jwt_audience'] = $object->getJwtAudience();
            }
            $values = [];
            foreach ($object->getRoleNames() as $value) {
                $values[] = $value;
            }
            $data['role_names'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\AddProjectJWKSRequest::class => false];
        }
    }
} else {
    class AddProjectJWKSRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class;
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
            $object = new \Vendor\Library\Generated\Model\AddProjectJWKSRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('jwks_url', $data)) {
                $object->setJwksUrl($data['jwks_url']);
                unset($data['jwks_url']);
            }
            if (\array_key_exists('provider_name', $data)) {
                $object->setProviderName($data['provider_name']);
                unset($data['provider_name']);
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('jwt_audience', $data)) {
                $object->setJwtAudience($data['jwt_audience']);
                unset($data['jwt_audience']);
            }
            if (\array_key_exists('role_names', $data)) {
                $values = [];
                foreach ($data['role_names'] as $value) {
                    $values[] = $value;
                }
                $object->setRoleNames($values);
                unset($data['role_names']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['jwks_url'] = $object->getJwksUrl();
            $data['provider_name'] = $object->getProviderName();
            if ($object->isInitialized('branchId') && null !== $object->getBranchId()) {
                $data['branch_id'] = $object->getBranchId();
            }
            if ($object->isInitialized('jwtAudience') && null !== $object->getJwtAudience()) {
                $data['jwt_audience'] = $object->getJwtAudience();
            }
            $values = [];
            foreach ($object->getRoleNames() as $value) {
                $values[] = $value;
            }
            $data['role_names'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\AddProjectJWKSRequest::class => false];
        }
    }
}