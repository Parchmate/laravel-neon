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
    class BranchCreateRequestBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\BranchCreateRequestBranch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('parent_id', $data)) {
                $object->setParentId($data['parent_id']);
                unset($data['parent_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('parent_lsn', $data)) {
                $object->setParentLsn($data['parent_lsn']);
                unset($data['parent_lsn']);
            }
            if (\array_key_exists('parent_timestamp', $data)) {
                $object->setParentTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['parent_timestamp']));
                unset($data['parent_timestamp']);
            }
            if (\array_key_exists('protected', $data)) {
                $object->setProtected($data['protected']);
                unset($data['protected']);
            }
            if (\array_key_exists('archived', $data)) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            }
            if (\array_key_exists('init_source', $data)) {
                $object->setInitSource($data['init_source']);
                unset($data['init_source']);
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
            if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
                $data['parent_id'] = $object->getParentId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('parentLsn') && null !== $object->getParentLsn()) {
                $data['parent_lsn'] = $object->getParentLsn();
            }
            if ($object->isInitialized('parentTimestamp') && null !== $object->getParentTimestamp()) {
                $data['parent_timestamp'] = $object->getParentTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('protected') && null !== $object->getProtected()) {
                $data['protected'] = $object->getProtected();
            }
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            if ($object->isInitialized('initSource') && null !== $object->getInitSource()) {
                $data['init_source'] = $object->getInitSource();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BranchCreateRequestBranch::class => false];
        }
    }
} else {
    class BranchCreateRequestBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class;
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
            $object = new \Vendor\Library\Generated\Model\BranchCreateRequestBranch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('parent_id', $data)) {
                $object->setParentId($data['parent_id']);
                unset($data['parent_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('parent_lsn', $data)) {
                $object->setParentLsn($data['parent_lsn']);
                unset($data['parent_lsn']);
            }
            if (\array_key_exists('parent_timestamp', $data)) {
                $object->setParentTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['parent_timestamp']));
                unset($data['parent_timestamp']);
            }
            if (\array_key_exists('protected', $data)) {
                $object->setProtected($data['protected']);
                unset($data['protected']);
            }
            if (\array_key_exists('archived', $data)) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            }
            if (\array_key_exists('init_source', $data)) {
                $object->setInitSource($data['init_source']);
                unset($data['init_source']);
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
            if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
                $data['parent_id'] = $object->getParentId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('parentLsn') && null !== $object->getParentLsn()) {
                $data['parent_lsn'] = $object->getParentLsn();
            }
            if ($object->isInitialized('parentTimestamp') && null !== $object->getParentTimestamp()) {
                $data['parent_timestamp'] = $object->getParentTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('protected') && null !== $object->getProtected()) {
                $data['protected'] = $object->getProtected();
            }
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            if ($object->isInitialized('initSource') && null !== $object->getInitSource()) {
                $data['init_source'] = $object->getInitSource();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\BranchCreateRequestBranch::class => false];
        }
    }
}