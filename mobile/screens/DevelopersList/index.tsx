import React, { useEffect, useState } from 'react'
import { getBottomSpace } from 'react-native-iphone-x-helper'

import { httpClient } from '../../services'
import { DeveloperCard } from '../../components'
import { Container, Header, Title, DeveloperList } from './styles'

export interface Developer {
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

export function DevelopersList() {
  const [developers, setDevelopers] = useState<Developer[]>([])

  useEffect(() => {
    httpClient.get<Developer[]>('/api/v1/developers')
      .then(({ data }) => {
        setDevelopers(data)
      })
  }, [])

  return (
    <Container>
      <Header>
        <Title>Developers</Title>
      </Header>
      <DeveloperList
        data={developers}
        keyExtractor={item => String(item.id)}
        renderItem={({ item }) => <DeveloperCard developer={item} />}
        showsVerticalScrollIndicator={false}
        contentContainerStyle={{
          paddingBottom: getBottomSpace()
        }}
      />
    </Container>
  );
}
