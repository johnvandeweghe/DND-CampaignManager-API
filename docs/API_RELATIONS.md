#Relationships
Every entry has a related_entries field, which is a list of entry relationships. Each relationship has a type, the related entry's type, and the id of the related entry.
Special relationships may have additional information as well
*All relationships are bi directional*
## List of relationship types

## Creature to Creature

| A to B  | B to A |
|---------|--------|
|parent_of|child_of|
|TODO     |TODO    |

## Creature to Item

| C to I  | I to C         | Additional Fields |
|---------|----------------|-------------------|
|has      |in_possession_of| quantity          |
|TODO     |TODO            |                   |

## Creature to Faction

| C to F  | F to C         | Additional Fields |
|---------|----------------|-------------------|
|member_of|member          | position          |
|TODO     |TODO            |                   |

## Location to Location
*Parent and child coincidently match up to Creature to Creature, but here it refers to Locations ability to nest as a graph*

*Sibling here refers to the location being connected to in some what another location (EX: two rooms in the same building)*

| A to B  | B to A    |
|----------|----------|
|parent_of |child_of  |
|sibling_of|sibling_of|
