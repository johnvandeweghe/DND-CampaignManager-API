<?php
namespace DNDCampaignManagerAPI\Server\ResourceParameterFactories;

use DNDCampaignManagerAPI\Server\ResourceParameters\CreatureParameters;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ArrayResourceParametersFactory;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceParameters;

class CreaturesParametersFactory extends ArrayResourceParametersFactory
{
    /**
     * @param string $element
     * @param array $data
     * @return ResourceParameters
     */
    protected function createResourceParametersFromArray($element, array $data): ResourceParameters
    {
        $creatureParameters = new CreatureParameters(
            (int)$element,
            $data["name"] ?? null,
            $data["appearance"] ?? null,
            $data["notes"] ?? null,
            $data["race"] ?? null,
            $data["gender"] ?? null,
            isset($data["max_hit_points"]) ? (int)$data["max_hit_points"] : null,
            $data["average_max_hit_points"] ?? null,
            isset($data["constitution"]) ? (int)$data["constitution"] : null,
            isset($data["strength"]) ? (int)$data["strength"] : null,
            isset($data["dexterity"]) ? (int)$data["dexterity"] : null,
            isset($data["intelligence"]) ? (int)$data["intelligence"] : null,
            isset($data["wisdom"]) ? (int)$data["wisdom"] : null,
            isset($data["charisma"]) ? (int)$data["charisma"] : null,
            isset($data["proficiency_bonus"]) ? (int)$data["proficiency_bonus"] : null,
            $data["size"] ?? null,
            isset($data["base_speed"]) ? (int)$data["base_speed"] : null,
            isset($data["burrow_speed"]) ? (int)$data["burrow_speed"] : null,
            isset($data["climb_speed"]) ? (int)$data["climb_speed"] : null,
            isset($data["fly_speed"]) ? (int)$data["fly_speed"] : null,
            isset($data["swim_speed"]) ? (int)$data["swim_speed"] : null,
            $data["languages"] ?? null,
            $data["senses"] ?? null,
            isset($data["constitution_saving_throw_modifier"]) ? (int)$data["constitution_saving_throw_modifier"] : null,
            isset($data["strength_saving_throw_modifier"]) ? (int)$data["strength_saving_throw_modifier"] : null,
            isset($data["dexterity_saving_throw_modifier"]) ? (int)$data["dexterity_saving_throw_modifier"] : null,
            isset($data["intelligence_saving_throw_modifier"]) ? (int)$data["intelligence_saving_throw_modifier"] : null,
            isset($data["wisdom_saving_throw_modifier"]) ? (int)$data["wisdom_saving_throw_modifier"] : null,
            isset($data["charisma_saving_throw_modifier"]) ? (int)$data["charisma_saving_throw_modifier"] : null,
            isset($data["acrobatics_proficiency_modifier"]) ? (int)$data["acrobatics_proficiency_modifier"] : null,
            isset($data["arcana_proficiency_modifier"]) ? (int)$data["arcana_proficiency_modifier"] : null,
            isset($data["athletics_proficiency_modifier"]) ? (int)$data["athletics_proficiency_modifier"] : null,
            isset($data["deception_proficiency_modifier"]) ? (int)$data["deception_proficiency_modifier"] : null,
            isset($data["history_proficiency_modifier"]) ? (int)$data["history_proficiency_modifier"] : null,
            isset($data["insight_proficiency_modifier"]) ? (int)$data["insight_proficiency_modifier"] : null,
            isset($data["intimidation_proficiency_modifier"]) ? (int)$data["intimidation_proficiency_modifier"] : null,
            isset($data["investigation_proficiency_modifier"]) ? (int)$data["investigation_proficiency_modifier"] : null,
            isset($data["medicine_proficiency_modifier"]) ? (int)$data["medicine_proficiency_modifier"] : null,
            isset($data["nature_proficiency_modifier"]) ? (int)$data["nature_proficiency_modifier"] : null,
            isset($data["perception_proficiency_modifier"]) ? (int)$data["perception_proficiency_modifier"] : null,
            isset($data["performance_proficiency_modifier"]) ? (int)$data["performance_proficiency_modifier"] : null,
            isset($data["persuasion_proficiency_modifier"]) ? (int)$data["persuasion_proficiency_modifier"] : null,
            isset($data["religion_proficiency_modifier"]) ? (int)$data["religion_proficiency_modifier"] : null,
            isset($data["slight_of_hand_proficiency_modifier"]) ? (int)$data["slight_of_hand_proficiency_modifier"] : null,
            isset($data["stealth_proficiency_modifier"]) ? (int)$data["stealth_proficiency_modifier"] : null,
            isset($data["survival_proficiency_modifier"]) ? (int)$data["survival_proficiency_modifier"] : null,
            $data["special_traits"] ?? null,
            $data["class_levels"] ?? null
        );

        return $creatureParameters;
    }
}
