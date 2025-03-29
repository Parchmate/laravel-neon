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
    class ResponseCreatedProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project', $data)) {
                $object->setProject($this->denormalizer->denormalize($data['project'], \Parchmate\LaravelNeon\Generated\Model\Project::class, 'json', $context));
                unset($data['project']);
            }
            if (\array_key_exists('connection_uris', $data)) {
                $values = [];
                foreach ($data['connection_uris'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\ConnectionDetails::class, 'json', $context);
                }
                $object->setConnectionUris($values);
                unset($data['connection_uris']);
            }
            if (\array_key_exists('roles', $data)) {
                $values_1 = [];
                foreach ($data['roles'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Parchmate\LaravelNeon\Generated\Model\Role::class, 'json', $context);
                }
                $object->setRoles($values_1);
                unset($data['roles']);
            }
            if (\array_key_exists('databases', $data)) {
                $values_2 = [];
                foreach ($data['databases'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Parchmate\LaravelNeon\Generated\Model\Database::class, 'json', $context);
                }
                $object->setDatabases($values_2);
                unset($data['databases']);
            }
            if (\array_key_exists('operations', $data)) {
                $values_3 = [];
                foreach ($data['operations'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Parchmate\LaravelNeon\Generated\Model\Operation::class, 'json', $context);
                }
                $object->setOperations($values_3);
                unset($data['operations']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Parchmate\LaravelNeon\Generated\Model\Branch::class, 'json', $context));
                unset($data['branch']);
            }
            if (\array_key_exists('endpoints', $data)) {
                $values_4 = [];
                foreach ($data['endpoints'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Parchmate\LaravelNeon\Generated\Model\Endpoint::class, 'json', $context);
                }
                $object->setEndpoints($values_4);
                unset($data['endpoints']);
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
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            $values = [];
            foreach ($object->getConnectionUris() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['connection_uris'] = $values;
            $values_1 = [];
            foreach ($object->getRoles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['roles'] = $values_1;
            $values_2 = [];
            foreach ($object->getDatabases() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['databases'] = $values_2;
            $values_3 = [];
            foreach ($object->getOperations() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['operations'] = $values_3;
            $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            $values_4 = [];
            foreach ($object->getEndpoints() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['endpoints'] = $values_4;
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class => false];
        }
    }
} else {
    class ResponseCreatedProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('project', $data)) {
                $object->setProject($this->denormalizer->denormalize($data['project'], \Parchmate\LaravelNeon\Generated\Model\Project::class, 'json', $context));
                unset($data['project']);
            }
            if (\array_key_exists('connection_uris', $data)) {
                $values = [];
                foreach ($data['connection_uris'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\ConnectionDetails::class, 'json', $context);
                }
                $object->setConnectionUris($values);
                unset($data['connection_uris']);
            }
            if (\array_key_exists('roles', $data)) {
                $values_1 = [];
                foreach ($data['roles'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Parchmate\LaravelNeon\Generated\Model\Role::class, 'json', $context);
                }
                $object->setRoles($values_1);
                unset($data['roles']);
            }
            if (\array_key_exists('databases', $data)) {
                $values_2 = [];
                foreach ($data['databases'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Parchmate\LaravelNeon\Generated\Model\Database::class, 'json', $context);
                }
                $object->setDatabases($values_2);
                unset($data['databases']);
            }
            if (\array_key_exists('operations', $data)) {
                $values_3 = [];
                foreach ($data['operations'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Parchmate\LaravelNeon\Generated\Model\Operation::class, 'json', $context);
                }
                $object->setOperations($values_3);
                unset($data['operations']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($this->denormalizer->denormalize($data['branch'], \Parchmate\LaravelNeon\Generated\Model\Branch::class, 'json', $context));
                unset($data['branch']);
            }
            if (\array_key_exists('endpoints', $data)) {
                $values_4 = [];
                foreach ($data['endpoints'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Parchmate\LaravelNeon\Generated\Model\Endpoint::class, 'json', $context);
                }
                $object->setEndpoints($values_4);
                unset($data['endpoints']);
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
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
            $values = [];
            foreach ($object->getConnectionUris() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['connection_uris'] = $values;
            $values_1 = [];
            foreach ($object->getRoles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['roles'] = $values_1;
            $values_2 = [];
            foreach ($object->getDatabases() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['databases'] = $values_2;
            $values_3 = [];
            foreach ($object->getOperations() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['operations'] = $values_3;
            $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
            $values_4 = [];
            foreach ($object->getEndpoints() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['endpoints'] = $values_4;
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class => false];
        }
    }
}