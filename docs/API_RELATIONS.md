#Relationships
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
|member_of|member          | title             |
|TODO     |TODO            |                   |

## Location to Location
*Parent and child coincidentally match up to Creature to Creature, but here it refers to Locations ability to nest as a graph*

*Sibling here refers to the location being connected to in some what another location (EX: two rooms in the same building)*

| A to B  | B to A    |
|----------|----------|
|parent_of |child_of  |
|sibling_of|sibling_of|
