import React, { useEffect, useState } from "react";
import { Text } from "react-native";
import { Container } from "./styles";

export function MoreInformation({ route, navigation }) {
  const developer = {
    id: 1,
    name: "Mr. Ahmed Lakin",
    sex: "M",
    birthdate: "2029-10-29 13:05:02",
    created_at: "2021-09-21T16:36:10.000000Z",
    updated_at: "2021-09-21T16:36:10.000000Z",
    hobbies: [
      {
        id: 155,
        name: "Philately",
        created_at: "2021-09-21T16:36:10.000000Z",
        updated_at: "2021-09-21T16:36:10.000000Z",
        pivot: {
          developer_id: 1,
          hobby_id: 155,
        },
      },

      {
        id: 217,
        name: "Video making",
        created_at: "2021-09-21T16:36:10.000000Z",
        updated_at: "2021-09-21T16:36:10.000000Z",
        pivot: {
          developer_id: 1,
          hobby_id: 217,
        },
      },
      {
        id: 398,
        name: "Urban exploration",
        created_at: "2021-09-21T16:36:10.000000Z",
        updated_at: "2021-09-21T16:36:10.000000Z",
        pivot: {
          developer_id: 1,
          hobby_id: 398,
        },
      },
      {
        id: 183,
        name: "Refinishing",
        created_at: "2021-09-21T16:36:10.000000Z",
        updated_at: "2021-09-21T16:36:10.000000Z",
        pivot: {
          developer_id: 1,
          hobby_id: 183,
        },
      },
    ],
    tools: [
      {
        id: 1,
        name: "React",
        url: "https://img.icons8.com/office/16/000000/react.png",
        created_at: "2021-09-21T16:36:10.000000Z",
        updated_at: "2021-09-21T16:36:10.000000Z",
        pivot: {
          developer_id: 1,
          tool_id: 1,
        },
      },
      {
        id: 3,
        name: "Angular",
        url: "https://img.icons8.com/color/48/000000/angularjs.png",
        created_at: "2021-09-21T16:36:10.000000Z",
        updated_at: "2021-09-21T16:36:10.000000Z",
        pivot: {
          developer_id: 1,
          tool_id: 3,
        },
      },
      {
        id: 8,
        name: "PHP",
        url: "https://img.icons8.com/color/48/000000/php.png",
        created_at: "2021-09-21T16:36:10.000000Z",
        updated_at: "2021-09-21T16:36:10.000000Z",
        pivot: {
          developer_id: 1,
          tool_id: 8,
        },
      },
    ],
  };

  console.log(route.params);

  return (
    <Container>
      <Text>Id</Text>
      <Text>{developer.id}</Text>

      <Text>Name</Text>
      <Text>{developer.name}</Text>

      <Text>Sex</Text>
      <Text>{developer.sex}</Text>

      <Text>birthdate</Text>
      <Text>{developer.birthdate}</Text>

      <Text>Created At</Text>
      <Text>{developer.created_at}</Text>

      <Text>Updated At</Text>
      <Text>{developer.updated_at}</Text>

      {developer.tools.map((tool) => {
        return (
          <Container>
            <Text>Name</Text>
            <Text>{tool.name}</Text>
          </Container>
        );
      })}

      {developer.hobbies.map((hobby) => {
        return (
          <Container>
            <Text>Name</Text>
            <Text>{hobby.name}</Text>
          </Container>
        );
      })}
    </Container>
  );
}
