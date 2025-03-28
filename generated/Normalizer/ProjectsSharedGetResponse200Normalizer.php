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
    class ProjectsSharedGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('projects', $data)) {
                $values = [];
                foreach ($data['projects'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\ProjectListItem::class, 'json', $context);
                }
                $object->setProjects($values);
                unset($data['projects']);
            }
            if (\array_key_exists('unavailable_project_ids', $data)) {
                $values_1 = [];
                foreach ($data['unavailable_project_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUnavailableProjectIds($values_1);
                unset($data['unavailable_project_ids']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], \Vendor\Library\Generated\Model\Pagination::class, 'json', $context));
                unset($data['pagination']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getProjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['projects'] = $values;
            if ($object->isInitialized('unavailableProjectIds') && null !== $object->getUnavailableProjectIds()) {
                $values_1 = [];
                foreach ($object->getUnavailableProjectIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['unavailable_project_ids'] = $values_1;
            }
            if ($object->isInitialized('pagination') && null !== $object->getPagination()) {
                $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class => false];
        }
    }
} else {
    class ProjectsSharedGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class;
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
            $object = new \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('projects', $data)) {
                $values = [];
                foreach ($data['projects'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Vendor\Library\Generated\Model\ProjectListItem::class, 'json', $context);
                }
                $object->setProjects($values);
                unset($data['projects']);
            }
            if (\array_key_exists('unavailable_project_ids', $data)) {
                $values_1 = [];
                foreach ($data['unavailable_project_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setUnavailableProjectIds($values_1);
                unset($data['unavailable_project_ids']);
            }
            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], \Vendor\Library\Generated\Model\Pagination::class, 'json', $context));
                unset($data['pagination']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $values = [];
            foreach ($object->getProjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['projects'] = $values;
            if ($object->isInitialized('unavailableProjectIds') && null !== $object->getUnavailableProjectIds()) {
                $values_1 = [];
                foreach ($object->getUnavailableProjectIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['unavailable_project_ids'] = $values_1;
            }
            if ($object->isInitialized('pagination') && null !== $object->getPagination()) {
                $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class => false];
        }
    }
}