import React from 'react';
import { Text, Button } from 'react-native'

import {
  Container,
  Tools,
  Name,
  Footer,
  Details,
  DetailName,
  Information,
  Date,
} from './styles';

interface DeveloperCardProps {
  developer: {
    id: Number
    name: string
    created_at: string
    updated_at: string
    birthdate: string
    tools: Array<{
      id: number,
      name: string
    }>
  }
}

export function DeveloperCard({ navigation, developer }: DeveloperCardProps) {
  return (
    <Container>
      <Tools>{developer.tools.map(tool => tool.name).join(' | ')}</Tools>
      <Name>{developer.name}</Name>
      <Footer>
        <Details>
          <Text>🎂</Text>
          <DetailName>Birth Date</DetailName>
        </Details>
        <Date>{developer.birthdate.substr(0,10).split('-').reverse().join('/')}</Date>
      </Footer>

      <Information>
        <Button title="More Information" onPress={() => navigation.navigate('MoreInformation', { id: developer.id })}></Button>
      </Information>
    </Container>
  )
}