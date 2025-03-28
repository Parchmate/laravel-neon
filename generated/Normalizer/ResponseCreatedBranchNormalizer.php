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
    class ResponseCreatedBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ResponseCreatedBranch::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ResponseCreatedBranch::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ResponseCreatedBranch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Vendor\Library\Generated\Model\Branch::class, 'json', $context));
                unset($data['branch']);
            }
            if (\array_key_exists('endpoints', $data)) {
                $values = [];
                foreach ($data['endpoints'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\Endpoint::class, 'json', $context);
                }
                $object->setEndpoints($values);
                unset($data['endpoints']);
            }
            if (\array_key_exists('operations', $data)) {
                $values_1 = [];
                foreach ($data['operations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\Operation::class, 'json', $context);
                }
                $object->setOperations($values_1);
                unset($data['operations']);
            }
            if (\array_key_exists('roles', $data)) {
                $values_2 = [];
                foreach ($data['roles'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Vendor\Library\Generated\Model\Role::class, 'json', $context);
                }
                $object->setRoles($values_2);
                unset($data['roles']);
            }
            if (\array_key_exists('databases', $data)) {
                $values_3 = [];
                foreach ($data['databases'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\Database::class, 'json', $context);
                }
                $object->setDatabases($values_3);
                unset($data['databases']);
            }
            if (\array_key_exists('connection_uris', $data)) {
                $values_4 = [];
                foreach ($data['connection_uris'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Vendor\Library\Generated\Model\ConnectionDetails::class, 'json', $context);
                }
                $object->setConnectionUris($values_4);
                unset($data['connection_uris']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            $values = [];
            foreach ($object->getEndpoints() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['endpoints'] = $values;
            $values_1 = [];
            foreach ($object->getOperations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['operations'] = $values_1;
            $values_2 = [];
            foreach ($object->getRoles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['roles'] = $values_2;
            $values_3 = [];
            foreach ($object->getDatabases() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['databases'] = $values_3;
            if ($object->isInitialized('connectionUris') && null !== $object->getConnectionUris()) {
                $values_4 = [];
                foreach ($object->getConnectionUris() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['connection_uris'] = $values_4;
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ResponseCreatedBranch::class => false];
        }
    }
} else {
    class ResponseCreatedBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ResponseCreatedBranch::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ResponseCreatedBranch::class;
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
            $object = new \Vendor\Library\Generated\Model\ResponseCreatedBranch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Vendor\Library\Generated\Model\Branch::class, 'json', $context));
                unset($data['branch']);
            }
            if (\array_key_exists('endpoints', $data)) {
                $values = [];
                foreach ($data['endpoints'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\Endpoint::class, 'json', $context);
                }
                $object->setEndpoints($values);
                unset($data['endpoints']);
            }
            if (\array_key_exists('operations', $data)) {
                $values_1 = [];
                foreach ($data['operations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Vendor\Library\Generated\Model\Operation::class, 'json', $context);
                }
                $object->setOperations($values_1);
                unset($data['operations']);
            }
            if (\array_key_exists('roles', $data)) {
                $values_2 = [];
                foreach ($data['roles'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Vendor\Library\Generated\Model\Role::class, 'json', $context);
                }
                $object->setRoles($values_2);
                unset($data['roles']);
            }
            if (\array_key_exists('databases', $data)) {
                $values_3 = [];
                foreach ($data['databases'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Vendor\Library\Generated\Model\Database::class, 'json', $context);
                }
                $object->setDatabases($values_3);
                unset($data['databases']);
            }
            if (\array_key_exists('connection_uris', $data)) {
                $values_4 = [];
                foreach ($data['connection_uris'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Vendor\Library\Generated\Model\ConnectionDetails::class, 'json', $context);
                }
                $object->setConnectionUris($values_4);
                unset($data['connection_uris']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
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
            $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            $values = [];
            foreach ($object->getEndpoints() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['endpoints'] = $values;
            $values_1 = [];
            foreach ($object->getOperations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['operations'] = $values_1;
            $values_2 = [];
            foreach ($object->getRoles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['roles'] = $values_2;
            $values_3 = [];
            foreach ($object->getDatabases() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['databases'] = $values_3;
            if ($object->isInitialized('connectionUris') && null !== $object->getConnectionUris()) {
                $values_4 = [];
                foreach ($object->getConnectionUris() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['connection_uris'] = $values_4;
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ResponseCreatedBranch::class => false];
        }
    }
}