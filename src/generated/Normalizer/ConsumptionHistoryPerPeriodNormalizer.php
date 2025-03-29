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
    class ConsumptionHistoryPerPeriodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('period_id', $data)) {
                $object->setPeriodId($data['period_id']);
                unset($data['period_id']);
            }
            if (\array_key_exists('period_plan', $data)) {
                $object->setPeriodPlan($data['period_plan']);
                unset($data['period_plan']);
            }
            if (\array_key_exists('period_start', $data)) {
                $object->setPeriodStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['period_start']));
                unset($data['period_start']);
            }
            if (\array_key_exists('period_end', $data)) {
                $object->setPeriodEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['period_end']));
                unset($data['period_end']);
            }
            if (\array_key_exists('consumption', $data)) {
                $values = [];
                foreach ($data['consumption'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class, 'json', $context);
                }
                $object->setConsumption($values);
                unset($data['consumption']);
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
            $data['period_id'] = $object->getPeriodId();
            $data['period_plan'] = $object->getPeriodPlan();
            $data['period_start'] = $object->getPeriodStart()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('periodEnd') && null !== $object->getPeriodEnd()) {
                $data['period_end'] = $object->getPeriodEnd()?->format('Y-m-d\TH:i:sP');
            }
            $values = [];
            foreach ($object->getConsumption() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['consumption'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class => false];
        }
    }
} else {
    class ConsumptionHistoryPerPeriodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('period_id', $data)) {
                $object->setPeriodId($data['period_id']);
                unset($data['period_id']);
            }
            if (\array_key_exists('period_plan', $data)) {
                $object->setPeriodPlan($data['period_plan']);
                unset($data['period_plan']);
            }
            if (\array_key_exists('period_start', $data)) {
                $object->setPeriodStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['period_start']));
                unset($data['period_start']);
            }
            if (\array_key_exists('period_end', $data)) {
                $object->setPeriodEnd(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['period_end']));
                unset($data['period_end']);
            }
            if (\array_key_exists('consumption', $data)) {
                $values = [];
                foreach ($data['consumption'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class, 'json', $context);
                }
                $object->setConsumption($values);
                unset($data['consumption']);
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
            $data['period_id'] = $object->getPeriodId();
            $data['period_plan'] = $object->getPeriodPlan();
            $data['period_start'] = $object->getPeriodStart()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('periodEnd') && null !== $object->getPeriodEnd()) {
                $data['period_end'] = $object->getPeriodEnd()?->format('Y-m-d\TH:i:sP');
            }
            $values = [];
            foreach ($object->getConsumption() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['consumption'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class => false];
        }
    }
}