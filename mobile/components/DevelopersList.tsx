import React, { useEffect, useState } from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { httpClient } from '../services'

type Developers = {
  id: Number,
  name: string
  created_at: string,
  updated_at: string
}

export function DevelopersList() {
  const [developers, setDevelopers] = useState<Developers[]>([])

  useEffect(() => {
    httpClient.get<Developers[]>('/api/v1/developers')
      .then(({ data }) => {
        setDevelopers(data)
      })
  }, [])

  return (
    <View style={styles.container}>
      {developers.map(developer => {
        return (
          <View>
            <Text>{developer.name}</Text>
          </View>
        )
      })}
    </View>
  );
}

const styles = StyleSheet.create({
  container: {},
});
