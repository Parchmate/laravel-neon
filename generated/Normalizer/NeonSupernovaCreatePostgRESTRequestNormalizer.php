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
    class NeonSupernovaCreatePostgRESTRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('database_name', $data)) {
                $object->setDatabaseName($data['database_name']);
                unset($data['database_name']);
            }
            if (\array_key_exists('role_name', $data)) {
                $object->setRoleName($data['role_name']);
                unset($data['role_name']);
            }
            if (\array_key_exists('db_schemas', $data)) {
                $values = [];
                foreach ($data['db_schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setDbSchemas($values);
                unset($data['db_schemas']);
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
            $data['branch_id'] = $object->getBranchId();
            $data['database_name'] = $object->getDatabaseName();
            $data['role_name'] = $object->getRoleName();
            $values = [];
            foreach ($object->getDbSchemas() as $value) {
                $values[] = $value;
            }
            $data['db_schemas'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => false];
        }
    }
} else {
    class NeonSupernovaCreatePostgRESTRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class;
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
            $object = new \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('database_name', $data)) {
                $object->setDatabaseName($data['database_name']);
                unset($data['database_name']);
            }
            if (\array_key_exists('role_name', $data)) {
                $object->setRoleName($data['role_name']);
                unset($data['role_name']);
            }
            if (\array_key_exists('db_schemas', $data)) {
                $values = [];
                foreach ($data['db_schemas'] as $value) {
                    $values[] = $value;
                }
                $object->setDbSchemas($values);
                unset($data['db_schemas']);
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
            $data['branch_id'] = $object->getBranchId();
            $data['database_name'] = $object->getDatabaseName();
            $data['role_name'] = $object->getRoleName();
            $values = [];
            foreach ($object->getDbSchemas() as $value) {
                $values[] = $value;
            }
            $data['db_schemas'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => false];
        }
    }
}