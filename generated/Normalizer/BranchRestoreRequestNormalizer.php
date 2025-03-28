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
    class BranchRestoreRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BranchRestoreRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BranchRestoreRequest::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\BranchRestoreRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('source_branch_id', $data)) {
                $object->setSourceBranchId($data['source_branch_id']);
                unset($data['source_branch_id']);
            }
            if (\array_key_exists('source_lsn', $data)) {
                $object->setSourceLsn($data['source_lsn']);
                unset($data['source_lsn']);
            }
            if (\array_key_exists('source_timestamp', $data)) {
                $object->setSourceTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['source_timestamp']));
                unset($data['source_timestamp']);
            }
            if (\array_key_exists('preserve_under_name', $data)) {
                $object->setPreserveUnderName($data['preserve_under_name']);
                unset($data['preserve_under_name']);
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
            $data['source_branch_id'] = $object->getSourceBranchId();
            if ($object->isInitialized('sourceLsn') && null !== $object->getSourceLsn()) {
                $data['source_lsn'] = $object->getSourceLsn();
            }
            if ($object->isInitialized('sourceTimestamp') && null !== $object->getSourceTimestamp()) {
                $data['source_timestamp'] = $object->getSourceTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('preserveUnderName') && null !== $object->getPreserveUnderName()) {
                $data['preserve_under_name'] = $object->getPreserveUnderName();
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
            return [\Vendor\Library\Generated\Model\BranchRestoreRequest::class => false];
        }
    }
} else {
    class BranchRestoreRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\BranchRestoreRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\BranchRestoreRequest::class;
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
            $object = new \Vendor\Library\Generated\Model\BranchRestoreRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('source_branch_id', $data)) {
                $object->setSourceBranchId($data['source_branch_id']);
                unset($data['source_branch_id']);
            }
            if (\array_key_exists('source_lsn', $data)) {
                $object->setSourceLsn($data['source_lsn']);
                unset($data['source_lsn']);
            }
            if (\array_key_exists('source_timestamp', $data)) {
                $object->setSourceTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['source_timestamp']));
                unset($data['source_timestamp']);
            }
            if (\array_key_exists('preserve_under_name', $data)) {
                $object->setPreserveUnderName($data['preserve_under_name']);
                unset($data['preserve_under_name']);
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
            $data['source_branch_id'] = $object->getSourceBranchId();
            if ($object->isInitialized('sourceLsn') && null !== $object->getSourceLsn()) {
                $data['source_lsn'] = $object->getSourceLsn();
            }
            if ($object->isInitialized('sourceTimestamp') && null !== $object->getSourceTimestamp()) {
                $data['source_timestamp'] = $object->getSourceTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('preserveUnderName') && null !== $object->getPreserveUnderName()) {
                $data['preserve_under_name'] = $object->getPreserveUnderName();
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
            return [\Vendor\Library\Generated\Model\BranchRestoreRequest::class => false];
        }
    }
}